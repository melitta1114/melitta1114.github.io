import javax.swing.*;
import java.awt.*;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;
import java.util.Random;

public class ColorFrame extends Frame {

    public Random random = new Random();

    public ColorFrame(){
        JFrame frame = new JFrame("ColorFrame"); //beallitjuk a keret nevet
        frame.setBounds(100, 100, 400, 200); //beallitjuk a keret meretet
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); //ha bezarjuk a keretet megall a munkamenet

        String[] colors = {"Red", "Green", "Blue", "Random"}; //a szinek tombje
        Choice choice = new Choice(); //legordulo lista letrehozasa

        for (String szin : colors) {
            choice.add(szin); //hozzaadjuk a legordulo listahoz a szineket
        }

        frame.add(choice);

        choice.addItemListener(new ItemListener() { //letrehozzuk a listenert ami figyeli a choice valtozasait
            public void itemStateChanged(ItemEvent e) { //ez az ItemListener interface egy metodusa ami akkor fut le amikor valtozas tortenik a choiceban
                if (e.getStateChange() == ItemEvent.SELECTED) { //azt jelzi, hogy kivalasztottak egy szint a listabol
                    String selectedColor = choice.getSelectedItem(); //kerjuk a szint
                    if (selectedColor.equals("Random")) { //ha random akkor random generalja a red, green blue elemeket a szinben
                        int red = new Random().nextInt(256);
                        int green = new Random().nextInt(256);
                        int blue = new Random().nextInt(256);
                        frame.getContentPane().setBackground(new Color(red, green, blue)); //beallitjuk az uj oldalszint
                    } else {
                        switch (selectedColor) { //figyeljuk mi a kivalasztott szin
                            case "Red":
                                frame.getContentPane().setBackground(Color.RED);
                                break;
                            case "Green":
                                frame.getContentPane().setBackground(Color.GREEN);
                                break;
                            case "Blue":
                                frame.getContentPane().setBackground(Color.BLUE);
                                break;
                        }
                    }
                    frame.getContentPane().repaint(); // frissul az oldal az uj hatterszin beallitasa utan
                }
            }

        });

       /* addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            }
        });*/ //igy nem all le a program az ablak bezarasa utan

        frame.setVisible(true); //lathatova tesszuk a keretet

    }
    public static void main(String[] args) {
        new ColorFrame();
    }

}
