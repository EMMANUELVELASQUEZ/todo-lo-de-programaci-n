import java.util.HashMap;
import java.util.Scanner;

class Product {
    String name;
    double priceInFiat;

    public Product(String name, double priceInFiat) {
        this.name = name;
        this.priceInFiat = priceInFiat;
    }
}

class CryptoPaymentProcessor {
    private double btcToUsdRate;

    public CryptoPaymentProcessor(double btcToUsdRate) {
        this.btcToUsdRate = btcToUsdRate;
    }

    public double convertBtcToUsd(double btcAmount) {
        return btcAmount * btcToUsdRate;
    }

    public boolean processPayment(double btcAmount, double productPriceInUsd) {
        double convertedAmount = convertBtcToUsd(btcAmount);
        return convertedAmount >= productPriceInUsd;
    }
}

public class CryptoStore {
    private HashMap<String, Product> inventory;
    private CryptoPaymentProcessor paymentProcessor;

    public CryptoStore(CryptoPaymentProcessor paymentProcessor) {
        this.paymentProcessor = paymentProcessor;
        this.inventory = new HashMap<>();
        loadProducts();
    }

    private void loadProducts() {
        inventory.put("1", new Product("Laptop", 1000.00));
        inventory.put("2", new Product("Smartphone", 500.00));
        inventory.put("3", new Product("Headphones", 150.00));
    }

    public void displayProducts() {
        System.out.println("Available products:");
        for (String key : inventory.keySet()) {
            Product product = inventory.get(key);
            System.out.println(key + ": " + product.name + " - $" + product.priceInFiat);
        }
    }

    public void purchaseProduct(String productId, double btcAmount) {
        Product product = inventory.get(productId);
        if (product != null) {
            boolean success = paymentProcessor.processPayment(btcAmount, product.priceInFiat);
            if (success) {
                System.out.println("Purchase successful! You bought a " + product.name);
            } else {
                System.out.println("Insufficient funds. Please try again with more BTC.");
            }
        } else {
            System.out.println("Invalid product ID.");
        }
    }

    public static void main(String[] args) {
        // Example BTC to USD conversion rate
        double btcToUsdRate = 30000.00;
        CryptoPaymentProcessor paymentProcessor = new CryptoPaymentProcessor(btcToUsdRate);
        CryptoStore store = new CryptoStore(paymentProcessor);

        Scanner scanner = new Scanner(System.in);

        while (true) {
            store.displayProducts();
            System.out.println("Enter the product ID you wish to purchase: ");
            String productId = scanner.nextLine();

            System.out.println("Enter the amount of BTC you will pay: ");
            double btcAmount = scanner.nextDouble();
            scanner.nextLine();  // Consume newline

            store.purchaseProduct(productId, btcAmount);

            System.out.println("Do you want to make another purchase? (yes/no): ");
            String continueShopping = scanner.nextLine();
            if (!continueShopping.equalsIgnoreCase("yes")) {
                break;
            }
        }

        scanner.close();
    }
}
