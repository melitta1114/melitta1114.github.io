import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.*;
import java.util.ArrayList;
import java.util.List;

public class PizzaPanel extends JPanel {

    private PizzaPanel pizzaPanel;
    private static Pizza pizza;
    private List<JCheckBox> ingredientCheckBoxes;
    private JLabel priceLabel;
    private JLabel ingredientsLabel;



    public PizzaPanel(Pizza pizza) {
        this.pizza = pizza;
        this.ingredientCheckBoxes = new ArrayList<>();
        this.pizzaPanel = this;
        initializeUI();
    }


    private void initializeUI() {
        setLayout(new BorderLayout());

        JPanel checkBoxPanel = new JPanel();
        checkBoxPanel.setLayout(new FlowLayout());


        addIngredientCheckBox("Corn");
        addIngredientCheckBox("Mushroom");
        addIngredientCheckBox("Olive");
        addIngredientCheckBox("Salami");
        addIngredientCheckBox("Tomato");

        // Add checkboxes to the panel
        for (JCheckBox checkBox : ingredientCheckBoxes) {
            checkBoxPanel.add(checkBox);


        }

        JButton saveButton = new JButton("Save Ingredients");
        saveButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                saveIngredients();
            }
        });
        checkBoxPanel.add(saveButton);

        JPanel infoPanel = new JPanel(new GridLayout(2, 1));
        priceLabel = new JLabel("Price: " + pizza.getPrice() + " RON", SwingConstants.CENTER);
        ingredientsLabel = new JLabel("Ingredients: " + pizza.getIngredients(), SwingConstants.CENTER);

        infoPanel.add(priceLabel);
        infoPanel.add(ingredientsLabel);

        add(checkBoxPanel, BorderLayout.NORTH);
        add(infoPanel, BorderLayout.SOUTH);
    }

    private void addIngredientCheckBox(String ingredientName) {
        JCheckBox checkBox = new JCheckBox(ingredientName);
        checkBox.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                updatePizzaIngredients();
            }
        });
        ingredientCheckBoxes.add(checkBox);
    }

    private void updatePizzaIngredients() {
        Pizza newPizza = new PizzaBase();

        for (JCheckBox checkBox : ingredientCheckBoxes) {
            if (checkBox.isSelected()) {
                switch (checkBox.getText()) {
                    case "Corn":
                        newPizza = new Corn(newPizza);
                        break;
                    case "Mushroom":
                        newPizza = new Mushroom(newPizza);
                        break;
                    case "Olive":
                        newPizza = new Olive(newPizza);
                        break;
                    case "Salami":
                        newPizza = new Salami(newPizza);
                        break;
                    case "Tomato":
                        newPizza = new Tomato(newPizza);
                        break;
                }
            }
        }

        pizza = newPizza;
        updateLabels();
        repaint();
    }
    void updateLabels() {
        priceLabel.setText("Price: " + pizza.getPrice() + " RON");
        ingredientsLabel.setText("Ingredients: " + pizza.getIngredients());
    }

  public  void saveIngredients() {
        // Először az árat adjuk hozzá a StringBuilderhez
        StringBuilder ingredients = new StringBuilder("Price: " + pizza.getPrice() + "\n");

        // Majd az összetevőket
        ingredients.append("Ingredients: ").append(pizza.getIngredients());

        // Kiraktam egy MessageBox-t is, ami megjeleníti az összetevőket
        JOptionPane.showMessageDialog(this, ingredients.toString(), "Saved Ingredients", JOptionPane.INFORMATION_MESSAGE);

        try (BufferedWriter writer = new BufferedWriter(new FileWriter("C://Users//Melitta//OneDrive//Asztali gép//Haladó programozási módszerek//L12_vmgi4447//src//input.txt"))) {
            // Elmentjük az árat és az összetevőket a fájlba
            writer.write(ingredients.toString());
            System.out.println("Ingredients saved successfully.");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }


    public Pizza getPizza() {
        return pizza;
    }

    public void setPizza(Pizza pizza) {
        this.pizza = pizza;
        updateLabels();
        repaint();
    }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        pizza.bake(g);
    }

    /*public void loadPizza() {
        try (BufferedReader reader = new BufferedReader(new FileReader("C://Users//Melitta//OneDrive//Asztali gép//Haladó programozási módszerek//L12_vmgi4447//src//input.txt"))) {
            // Az első sorban a pizza árát várjuk
            String priceLine = reader.readLine();
            if (priceLine != null && priceLine.startsWith("Price: ")) {
                String priceString = priceLine.substring("Price: ".length()).trim();
                int price = Integer.parseInt(priceString);

                // A második sorban az összetevőket várjuk
                String ingredientsLine = reader.readLine();
                if (ingredientsLine != null && ingredientsLine.startsWith("Ingredients: ")) {
                    String[] ingredientsArray = ingredientsLine.substring("Ingredients: ".length()).split(", ");

                    // Az új Pizza példány létrehozása az ár és összetevők alapján
                    Pizza loadedPizza = new PizzaBase();
                    loadedPizza.setPrice(price);
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

                    pizzaPanel.setPizza(loadedPizza);
                    repaint();
                    System.out.println("Pizza loaded successfully.");
                } else {
                    System.out.println("Hibás formátum az összetevők beolvasásához.");
                }
            } else {
                System.out.println("Hibás formátum az ár beolvasásához.");
            }
        } catch (IOException | NumberFormatException e) {
            e.printStackTrace();
        }
    }*/


   public void loadPizza() {
        try (BufferedReader reader = new BufferedReader(new FileReader("C://Users//Melitta//OneDrive//Asztali gép//Haladó programozási módszerek//L12_vmgi4447//src//input.txt"))) {
            // Az első sorban a pizza árát várjuk
            String priceLine = reader.readLine();
            if (priceLine != null && priceLine.startsWith("Price: ")) {
                String priceString = priceLine.substring("Price: ".length()).trim();
                int price = Integer.parseInt(priceString);

                // A második sorban az összetevőket várjuk
                String ingredientsLine = reader.readLine();
                if (ingredientsLine != null && ingredientsLine.startsWith("Ingredients: ")) {
                    String[] ingredientsArray = ingredientsLine.substring("Ingredients: ".length()).split(", ");

                    // Az új Pizza példány létrehozása az ár és összetevők alapján
                    Pizza loadedPizza = new PizzaBase();
                    loadedPizza.setPrice(price);

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
                    pizzaPanel.repaint();

                    System.out.println("Pizza loaded successfully.");
                } else {
                    System.out.println("Hibás formátum az összetevők beolvasásához.");
                }
            } else {
                System.out.println("Hibás formátum az ár beolvasásához.");
            }
        } catch (IOException | NumberFormatException e) {
            e.printStackTrace();
        }
    }



}

