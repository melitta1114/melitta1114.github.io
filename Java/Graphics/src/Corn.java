import javax.imageio.ImageIO;
import java.awt.*;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

public class Corn extends PizzaIngredient{
    private BufferedImage img;

    public Corn(Pizza pizza){
        super(pizza);
        img = null;
        try {
            img = ImageIO.read(new File("img/corn.png"));
        } catch (IOException e) {
            e.printStackTrace();
        }
    };

    @Override
    public void bake(Graphics g){
        super.bake(g);
        g.drawImage(img, 0, 0, null);
    };

    public int getPrice(){
        return super.getPrice(); //az alap 23 lejes arban benne van a Corn
    };

    public String getIngredients() {
        return super.getIngredients() + ", Corn";
    }

    @Override
    public void setPrice(int price) {

    }

    @Override
    public void setIngredients(String ingredientsString) {

    }
}

