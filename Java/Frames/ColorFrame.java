import javax.swing.*;
import java.awt.*;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;
import java.util.Random;

public class ColorFrame extends JFrame {
    JFrame frame = new JFrame();
    JPanel panel = new JPanel();

    Random random = new Random();

    public ColorFrame(){
        frame.setTitle("Szinek");
        frame.setDefaultCloseOperation(EXIT_ON_CLOSE);
        frame.setSize(400, 400);
        frame.add(panel);
        String[] colors = {"Red", "Green", "Blue", "Random"};

        Choice choice = new Choice();

        for(String szin: colors){
            choice.add(szin);
        }
        panel.add(choice);

        choice.addItemListener(new ItemListener(){

            @Override
            public void itemStateChanged(ItemEvent e) {
                if (e.getStateChange() == ItemEvent.SELECTED) {
                    String selectedItem = choice.getSelectedItem();

                    if (selectedItem.equals("Random")) {
                        int red = new Random().nextInt(256);
                        int green = new Random().nextInt(256);
                        int blue = new Random().nextInt(256);
                        panel.setBackground(new Color(red, green, blue));
                    } else {
                        switch (selectedItem) {
                            case "Red":
                                panel.setBackground(Color.RED);
                                break;
                            case "Green":
                                panel.setBackground(Color.GREEN);
                                break;
                            case "Blue":
                                panel.setBackground(Color.BLUE);
                                break;

                        }
                    }
                    frame.getContentPane().repaint();
                }
            }
        });

        frame.setVisible(true);
    }
}
