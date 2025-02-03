public class Kettes {

    public static int parosargumentumokosszege;
    public static int paratlanargumentumokosszege;

    public static void main(String[] args) {

        for (String arg : args) {
            try {
                int argumentum = Integer.parseInt(arg);

                if (argumentum % 2 == 0)
                    parosargumentumokosszege += argumentum;
                else
                    paratlanargumentumokosszege += argumentum;
            } catch (NumberFormatException e) {
                System.err.println("Az argumentum nem egesz szam: " + arg);
            }
        }

        System.out.println("A paros szamok osszege: " + parosargumentumokosszege);
        System.out.println("A paratlan szamok osszege: " + paratlanargumentumokosszege);
    }
}
