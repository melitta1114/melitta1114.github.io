import javax.swing.*;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import static javax.swing.WindowConstants.EXIT_ON_CLOSE;

/*Hozzunk létre egy GroceryListFrame nevű keretet,
és helyezzünk el egymás mellé rendre egy listaablakot (List) egy
“->” feliratú gombot, egy “<-”  feliratú gombot, majd egy másik listaablakot.
Az első listát töltsük fel gyümölcsnevekkel, a másodikat zöldségnevekkel.
Ha a felhasználó a “->” gombra kattint, akkor az első listaablakban kijelölt
szavak átkerülnek a második listaablakba, és fordítva. Egy listaablakon belül
egyszerre több elem is legyen kijelölhető: setMultipleMode(true).*/
public class GroceryListFrame {

    public GroceryListFrame(){
         JFrame frame2 = new JFrame();
         JPanel panel2 = new JPanel();
         frame2.setDefaultCloseOperation(EXIT_ON_CLOSE);
         frame2.setTitle("GroceryList");
         frame2.setBounds(200, 200, 400, 400 );
         frame2.add(panel2);
         List list1 = new List();
         JButton here = new JButton("->");
         JButton there = new JButton("<-");
         List list2 = new List();
         panel2.setLayout(new FlowLayout());
         panel2.add(list1);
         panel2.add(here);
         panel2.add(there);
         panel2.add(list2);

         String[] fruits = {"apple", "pear", "strawberries", "grape"};
         String[] vegetables = {"tomato", "paprika", "onion", "cucumber"};

         for(String fruit: fruits){
             list1.add(fruit);
         }
         for(String vegetable: vegetables){
             list2.add(vegetable);
         }
        list1.setMultipleMode(true);
        list2.setMultipleMode(true);

        here.addActionListener(new ActionListener(){

            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    String[] selectedfruits = list1.getSelectedItems();
                    for(String selfruit: selectedfruits){
                        list2.add(selfruit);
                        list1.remove(selfruit);
                    }
                } catch (Exception exe) {
                    exe.getStackTrace();
                }
            }
        });

        there.addActionListener(new ActionListener(){

            @Override
            public void actionPerformed(ActionEvent e) {
                try {
                    String[] selectedvegetables = list2.getSelectedItems();
                    for(String selvegetable: selectedvegetables){
                        list1.add(selvegetable);
                        list2.remove(selvegetable);
                    }
                } catch (Exception exe) {
                    exe.getStackTrace();
                }
            }
        });

         frame2.setVisible(true);
    }
}
