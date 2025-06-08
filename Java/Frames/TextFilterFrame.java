import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/*Hozzunk létre egy TextFilterFrame nevű keretet, adjunk hozzá egymás alá
egy szövegmezőt (TextField), egy gombot a „Filter” felirattal, valamint egy
TextArea komponenst. Gombnyomásra végezzünk szűrést: a TextArea
komponensből kérjük le a kijelölt szövegrészt, és ebből a szövegrészből töröljük
a szövegmezőbe írt szó összes előfordulását. A gomb lenyomása után a TextArea-ban
maradjon csak a kijelölt szövegrész szűrt változata.
Segítség: Törlésre használhatjuk a String osztály replace(...) metódusát.*/
public class TextFilterFrame extends JFrame {

    public TextFilterFrame() {
        JFrame frame1 = new JFrame();
        JPanel panel1 = new JPanel();
        frame1.setTitle("Szoveg");
        frame1.setDefaultCloseOperation(EXIT_ON_CLOSE);
        frame1.add(panel1);
        frame1.setBounds(400, 400, 400, 400);
        TextField textfield1 = new TextField(2);
        JButton button1 = new JButton("Filter");
        TextArea textarea1 = new TextArea(2, 2);
        panel1.setLayout(new GridLayout(3, 1, 400, 20));
        panel1.add(textfield1);
        panel1.add(button1);
        panel1.add(textarea1);

        button1.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String selected = textarea1.getSelectedText();
                String selected2 = textfield1.getText();

                try {
                    String remainedtext = selected2.replaceAll(selected, "");
                    textfield1.setText(remainedtext);
                } catch (Exception ex) {
                    ex.printStackTrace();
                }
            }
            });

                frame1.setVisible(true);
        }

    }

