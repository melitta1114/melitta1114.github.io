import javax.imageio.ImageIO;
import java.awt.*;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

public class PizzaBase implements Pizza{
    private BufferedImage img;

    private int price;
    private String ingredients;

    /*public void setPriceAndIngredients(int price, String ingredients) throws IOException {
        this.price = price;
        this.ingredients = ingredients; // ne kezd újra minden alkalommal

        // Kép inicializálása a pizzatésztával
        img = ImageIO.read(new File("img/pizza_base.png"));

        // Az összetevők beállítása és egymásra pakolása
        String[] ingredientArray = ingredients.split(", ");
        for (String ingredient : ingredientArray) {
            BufferedImage ingredientImage = null;
            switch (ingredient) {
                case "Corn":
                    ingredientImage = ImageIO.read(new File("img/corn.png"));
                    break;
                case "Mushroom":
                    ingredientImage = ImageIO.read(new File("img/mushroom.png"));
                    break;
                case "Olive":
                    ingredientImage = ImageIO.read(new File("img/olive.png"));
                    break;
                case "Salami":
                    ingredientImage = ImageIO.read(new File("img/salami.png"));
                    break;
                case "Tomato":
                    ingredientImage = ImageIO.read(new File("img/tomato.png"));
                    break;
            }

            if (ingredientImage != null) {
                // Az új összetevő képét rajzold rá a már meglévő pizzára
                Graphics g = img.getGraphics();
                g.drawImage(ingredientImage, 0, 0, null);
                g.dispose();
            }
        }
    }*/

    public PizzaBase() {
        img = null;
        try {
            img = ImageIO.read(new File("img/pizza_base.png"));
        } catch (IOException e) {
            e.printStackTrace();
        }
    };

    public void bake(Graphics g){
        g.drawImage(img, 0, 0, null);
    };

    public int getPrice(){

        return 23;
    };

    public String getIngredients(){

        return "Pizza dough";
    }

    @Override
    public void setPrice(int price) {

    }

    @Override
    public void setIngredients(String ingredientsString) {

    }

}
