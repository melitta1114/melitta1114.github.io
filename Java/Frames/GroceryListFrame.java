import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class GroceryListFrame {
    public GroceryListFrame(){
        JFrame frame3 = new JFrame("GroceryListFrame"); //letrehozzuk a keretet
        frame3.setBounds(100, 100, 400, 200); // beallitjuk a meretet
        frame3.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); // ha bezarjuk az ablakot leall a program


        List gyumolcsok = new List(); //gyumolcsok tombje
        gyumolcsok.add("Alma");
        gyumolcsok.add("Korte");
        gyumolcsok.add("Barack");
        gyumolcsok.add("Banan");
        gyumolcsok.add("Szilva");

        List zoldsegek = new List(); //zoldsegek tombje
        zoldsegek.add("Paprika");
        zoldsegek.add("Hagyma");
        zoldsegek.add("Repa");
        zoldsegek.add("Retek");
        zoldsegek.add("Krumpli");

        JButton button1 = new JButton("->"); //gombok
        JButton button2 = new JButton("<-");

        frame3.setLayout(new FlowLayout()); //egymas mellett lesznek az elemek
        frame3.add(gyumolcsok);
        frame3.add(button1);
        frame3.add(button2);
        frame3.add(zoldsegek);


        gyumolcsok.setMultipleMode(true); //JList-el nem mukodik ez a metodus ezert hasznalunk sima Listet
        zoldsegek.setMultipleMode(true);

        button1.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                // Kivalasztott gyumolcsok athelyezese a zoldseg listaba
                String[] kijeloltGyumolcsok = gyumolcsok.getSelectedItems();
                for (String gyumolcs : kijeloltGyumolcsok) {
                    gyumolcsok.remove(gyumolcs);
                    zoldsegek.add(gyumolcs);
                }
            }
        });

        button2.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                // Kivalasztott zoldsegek athelyezese a gyumolcs listaba
                String[] kijeloltZoldsegek = zoldsegek.getSelectedItems();
                for (String zoldseg : kijeloltZoldsegek) {
                    zoldsegek.remove(zoldseg);
                    gyumolcsok.add(zoldseg);
                }
            }
        });

        /* addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            }
        });*/ //igy nem all le a program az ablak bezarasa utan

        frame3.setVisible(true);//legyen a keret lathato
    }
    public static void main(String[] args) {
        new GroceryListFrame();
    }
}

