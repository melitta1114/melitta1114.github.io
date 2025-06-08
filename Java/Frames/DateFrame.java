import javax.swing.*;
import java.awt.*;
import java.time.LocalDateTime;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class DateFrame extends JFrame {
    JFrame keret = new JFrame("DateFrame"); //peldany

    public DateFrame() {
        keret.setBounds(400, 400, 400, 400); //meretek

        JLabel label = new JLabel("Ha a gombra kattintasz meg fog jelenni a mai datum."); //uj JLabel
        JButton button = new JButton("Click"); // uj JButton

        keret.setLayout(new FlowLayout()); //egymas melle
        keret.add(label); //a kerethez adjuk a labelt meg buttont
        keret.add(button);

        button.addActionListener(new ActionListener() { //figyeljuk a gombra kattintast, ez egy esemenykezelo
            public void actionPerformed(ActionEvent e) { //az ActionPerformed ay ActionListener interfesz egyetlen metodusa, ez hajtodik vegre kattintaskor
                LocalDateTime maidatum = LocalDateTime.now(); //a mai datum
                label.setText(String.valueOf(maidatum)); // a labelbe irja a mai datumot
            }
        });

        keret.setDefaultCloseOperation(DISPOSE_ON_CLOSE); //leall a program miutan bezartuk a framet
        keret.setVisible(true); //latszodjon a keret
    }

    public static void main(String[] args) {
        new DateFrame();
    } //DateFrame osztaly peldanya
}

