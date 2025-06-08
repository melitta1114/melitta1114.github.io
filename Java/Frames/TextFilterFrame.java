import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

import static java.awt.AWTEventMulticaster.add;

public class TextFilterFrame {

    public TextFilterFrame() {
        JFrame frame2 = new JFrame("TextFilterFrame"); //letrehozas
        frame2.setBounds(100, 100, 400, 200); //ablakmeret
        frame2.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); //bezaras utan leall a program

        JTextField textfield = new JTextField(2); //egyszavas szovegmezo
        JButton button = new JButton("Filter"); //gomb
        JTextArea textarea = new JTextArea(2, 2); //tobbszavas szovegmezo

        frame2.setLayout(new GridLayout(3, 1, 400, 20)); //beallitjuk az elrendezest az oldalon
        frame2.add(textfield);
        frame2.add(button);
        frame2.add(textarea);

        button.addActionListener(new ActionListener() { //figyeljuk hogy a gomb le van-e nyomva
            public void actionPerformed(ActionEvent e) { //ActionListener interface metodusa

                String textfieldszoveg = textfield.getSelectedText(); //kerjuk a field kijelolt szoveget
                String textareaszoveg = textarea.getText(); //kerjuk az area szoveget

                if (textfieldszoveg != null) { //ha nincs if akkor hibat mutat, ha nincs szoveg kijelolve a fieldben
                    String megmaradtszoveg = textareaszoveg.replaceAll(textfieldszoveg, ""); //minden elofordulast helyettesitunk ures stringgel
                    textarea.setText(megmaradtszoveg); //helyettesitjuk az area tartalmat a megmaradt szoveggel
                }

            }
        });

        /* addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent e) {
                System.exit(0);
            }
        });*/ //igy nem all le a program az ablak bezarasa utan

        frame2.setVisible(true); //lathatova tesszuk a keretet
    }
    public static void main(String[] args) {
        new TextFilterFrame();
    }
}
