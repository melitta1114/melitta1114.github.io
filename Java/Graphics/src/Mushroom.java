import javax.imageio.ImageIO;
import java.awt.*;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

public class Mushroom extends PizzaIngredient{

    private BufferedImage img;

    public Mushroom(Pizza pizza){
        super(pizza);
        img = null;
        try {
            img = ImageIO.read(new File("img/mushroom.png"));
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
        return super.getPrice() + 2;
    };

    public String getIngredients() {
        return super.getIngredients() + ", Mushroom";
    }

    @Override
    public void setPrice(int price) {

    }

    @Override
    public void setIngredients(String ingredientsString) {

    }
}

