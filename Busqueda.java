package programacion_02;

public class Busqueda {

    public static void main(String[] args) {
        int[] semana = {20, 1, 15, 71, 8, 10, 3};
        int var = 23;
        int pos = -1;

        for (int i = 0; i < semana.length; i++) {
            if (semana[i] == var) {
                pos = i;
                break;
            }
        }

        if (pos == -1) {
            System.out.println("No existe");
        } else {
            System.out.println("El número está en la posición: " + pos);
        }
    }
}
