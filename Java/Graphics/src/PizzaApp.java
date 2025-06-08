import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.*;

public class PizzaApp extends JFrame {
    private PizzaPanel pizzaPanel;

    public PizzaApp() {
        initializeUI();
    }

    private void initializeUI() {
        JMenuBar menuBar = new JMenuBar();
        JMenu fileMenu = new JMenu("File");

        JMenuItem saveItem = new JMenuItem("Save ingredients");
        JMenuItem loadItem = new JMenuItem("Load ingredients");


        saveItem.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                savePizza();
            }
        });

        loadItem.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                loadPizzaFromTextFile();
            }
        });

        fileMenu.add(saveItem);
        fileMenu.add(loadItem);
        menuBar.add(fileMenu);

        setJMenuBar(menuBar);

        pizzaPanel = new PizzaPanel(new PizzaBase());

        /*pizzaPanel = new PizzaPanel(loadedPizza);*/

        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(500, 500);
        add(pizzaPanel);
        setVisible(true);


        /*return loadedPizza;*/
    }





    private void savePizza() {
            JFileChooser fileChooser = new JFileChooser();
            int result = fileChooser.showSaveDialog(this);

            if (result == JFileChooser.APPROVE_OPTION) {
                File file = fileChooser.getSelectedFile();
                try (ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream(file))) {
                    oos.writeObject(pizzaPanel.getPizza());
                    System.out.println("A pizza ara es osszetevoi sikeresen mentve.");
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }

    /*private void loadPizza() {
        pizzaPanel.loadPizza();
    }*/

    private void loadPizzaFromTextFile() {
        try (BufferedReader reader = new BufferedReader(new FileReader("input.txt"))) {
            // Az első sorban az összetevőket várjuk
            String ingredientsLine = reader.readLine();
            if (ingredientsLine != null && ingredientsLine.startsWith("Ingredients: ")) {
                String[] ingredientsArray = ingredientsLine.substring("Ingredients: ".length()).split(", ");

                // Az új Pizza példány létrehozása az összetevők alapján
                Pizza loadedPizza = new PizzaBase();

                // Iterátorral végigmenni az összetevőkön és hozzáadni a pizzához
                for (String ingredient : ingredientsArray) {
                    switch (ingredient) {
                        case "Corn":
                            loadedPizza = new Corn(loadedPizza);
                            break;
                        case "Mushroom":
                            loadedPizza = new Mushroom(loadedPizza);
                            break;
                        case "Olive":
                            loadedPizza = new Olive(loadedPizza);
                            break;
                        case "Salami":
                            loadedPizza = new Salami(loadedPizza);
                            break;
                        case "Tomato":
                            loadedPizza = new Tomato(loadedPizza);
                            break;
                    }
                }

                // Az új Pizza példányt állítsd be a PizzaPanel-ben
                pizzaPanel.setPizza(loadedPizza);

                // Frissítsd a címkéket
                pizzaPanel.updateLabels();

                // Újra rajzold a panelt
                repaint();

                System.out.println("Pizza loaded successfully from input.txt.");
            } else {
                System.out.println("Hibás formátum az összetevők beolvasásához.");
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }



    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                new PizzaApp();
            }
        });
    }
}


