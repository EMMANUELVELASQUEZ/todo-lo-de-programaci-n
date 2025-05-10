import java.util.Scanner;

public class CALIFICACIONFINAL {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

    
        System.out.print("Parcial 1: ");
        double parcial1 = scanner.nextDouble();
        System.out.print("Parcial 2: ");
        double parcial2 = scanner.nextDouble();
        System.out.print("Parcial 3: ");
        double parcial3 = scanner.nextDouble();
        System.out.print("Examen final: ");
        double examenFinal = scanner.nextDouble();
        System.out.print("Trabajo final: ");
        double trabajoFinal = scanner.nextDouble();
     
        double calificacionFinal = ((parcial1 + parcial2 + parcial3) / 3) * 0.55 +
                                   examenFinal * 0.30 +
                                   trabajoFinal * 0.15;
     
        System.out.println("Calificación final: " + calificacionFinal);

        scanner.close();
    }
}