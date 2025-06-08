import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import static javax.swing.WindowConstants.DISPOSE_ON_CLOSE;

public class MovePanel extends JPanel {

    public int posX=10; // x koordinata
    public int posY=10; // y koordinata

    JFrame keret2 = new JFrame("MoveCircleFrame");
    public MovePanel(){
        keret2.setBounds(400,400,400,400);

        JButton button1 = new JButton("↑");
        JButton button2 = new JButton("↓");
        JButton button3 = new JButton("→");
        JButton button4 = new JButton("←");

        keret2.setLayout(new BorderLayout());  //minden fele helyezzuk specifikusan lejjebb
        keret2.add(button1, BorderLayout.NORTH);
        keret2.add(button2, BorderLayout.SOUTH);
        keret2.add(button3, BorderLayout.EAST);
        keret2.add(button4, BorderLayout.WEST);
        keret2.add(this, BorderLayout.CENTER);

        button1.addActionListener(new ActionListener() { //figyeljuk a gombra kattintast
            @Override
            public void actionPerformed(ActionEvent e) {
                setPosY(Math.max(posY - 10, 0));
            } // posY max erteke 0 lehet
        });

        button2.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                setPosY(Math.min(posY + 10, getHeight() - 50));
            } // posY min erteke 0 lehet
        });

        button3.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                setPosX(Math.min(posX + 10, getWidth() - 50));
            } //posX min erteke 0
        });

        button4.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                setPosX(Math.max(posX - 10, 0));
            } //posX max erteke 0 lehet
        });


        keret2.setDefaultCloseOperation(DISPOSE_ON_CLOSE);
        keret2.setResizable(false); //nem lehet atmeretezni az oldalt grafikusan kattintva
        keret2.setVisible(true);
    }

    public void setPosX(int x) {
        posX = x;
        repaint();
    }

    public void setPosY(int y) {
        posY = y;
        repaint();
    }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g); //kitajzolja a komponenst
        g.setColor(Color.GREEN); //kor szine
        g.fillOval(posX, posY, 50, 50); //ovalis
    }


    public static void main(String[] args){
        new MovePanel();
    }

}
