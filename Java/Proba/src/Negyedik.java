public class Negyedik {

    static int szam;
    static int jelenlegi=1;

    public static void main(String[] args) {
        if(args.length > 0) {
            try {
                szam = Integer.parseInt(args[0]);
            } catch (NumberFormatException e) {
                szam = 10;
            }
        } else{
            szam=10;
        }


        int[][] tomb = new int[szam][];

        for (int i = 0; i < szam; i++) {
            tomb[i] = new int[i + 1];
            for (int j = 0; j <= i; j++) {
                tomb[i][j] = jelenlegi;
                jelenlegi++;
            }
        }

        for (int i = 0; i < szam; i++) {
            for (int j = 0; j <= i; j++) {
                System.out.print(tomb[i][j] + " ");
            }
            System.out.println();
        }
    }

}
