import java.sql.SQLOutput;

public class Egyes {
    public String nev;

    public Egyes(String nev){
        this.nev=nev;
    }

    public static void main(String[] args){
        Egyes nevem = new Egyes("Veres Melitta-Kinga");
        System.out.println("Hello " + nevem.nev + "!");

    }
}




