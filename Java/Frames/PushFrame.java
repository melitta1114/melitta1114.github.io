import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.util.Random;

public class PushFrame extends JFrame {

    private JButton pushButton;
    private Random random = new Random();

    public PushFrame() {

        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(null); // nincs Layout


        pushButton = new JButton("Push me!");
        pushButton.setBounds(50, 50, 100, 30); // kezdeti pozicio es meret
        pushButton.addActionListener(new ActionListener() { //uj osztaly implementalja az ActionListener interfeszt
            @Override //feluliras
            public void actionPerformed(ActionEvent e) {
                moveButtonToRandomLocation();
            } // random helyre megy
        });

        addMouseListener(new MouseAdapter() {
            @Override
            public void mouseEntered(MouseEvent e) {
                moveButtonToRandomLocation();
            }
        }); // ha a button fole megyek elmozdul

        setMinimumSize(new Dimension(200, 200)); //keret merete

        add(pushButton); //hozzaadjuk a buttont a kerethez

        setVisible(true);
    }

    private void moveButtonToRandomLocation() {
        int frameWidth = getWidth() - pushButton.getWidth();
        int frameHeight = getHeight() - pushButton.getHeight(); //kiszamolja a keret meretet es kivonja belole a gomb meretet

        int newX = random.nextInt(frameWidth);
        int newY = random.nextInt(frameHeight); //ez lesz a random hely

        pushButton.setLocation(newX, newY); //mozditja a random helyre
    }

    private boolean isMouseOverButton() { // ellenorzi hogy a gomb felett van-e a kurzor
        Point mousePosition = MouseInfo.getPointerInfo().getLocation(); //a kurzor aktualis pozicioja
        Point buttonPosition = pushButton.getLocationOnScreen(); //keri a button poziciojat
        int buttonWidth = pushButton.getWidth();
        int buttonHeight = pushButton.getHeight(); //keri a gomb mereteit

        return (mousePosition.x >= buttonPosition.x && mousePosition.x <= buttonPosition.x + buttonWidth) &&
                (mousePosition.y >= buttonPosition.y && mousePosition.y <= buttonPosition.y + buttonHeight);
    }// a returnben azt vizsgaljuk hogy a kurzor pozicioja a gomb teruleten belul van-e vagy sem

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() { //biztositja hogy az alkalmazas inicializalasa es megjelenitese az AWT esemenykezelo szalban tortenjen meg
            @Override
            public void run() {
                new PushFrame();
            }
        });
    }
}

