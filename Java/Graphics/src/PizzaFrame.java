import javax.swing.*;

public class PizzaFrame extends JFrame {
    private PizzaPanel pizzaPanel;

    public PizzaFrame() {

        Pizza pizza = new Olive(new Mushroom(new Corn(new Salami(new Tomato(new PizzaBase())))));


        pizzaPanel = new PizzaPanel(pizza);


        System.out.println("Pizza Price: " + pizza.getPrice() + " RON");
        System.out.println("Pizza Ingredients: " + pizza.getIngredients());

        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(500, 500);
        add(pizzaPanel);
        setVisible(true);
    }

    public static void main(String[] args) {
        PizzaFrame pizzaFrame = new PizzaFrame();
    }
}


