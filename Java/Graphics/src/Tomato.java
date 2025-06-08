import javax.imageio.ImageIO;
import java.awt.*;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;

public class Tomato extends PizzaIngredient{

    private BufferedImage img;

    public Tomato(Pizza pizza){
        super(pizza); //ha nem tudja beolvasni a kepet, exceptiont dob, ez azert kell, mert maskepp nem megy
        img = null;
        try {
            img = ImageIO.read(new File("img/tomato.png"));
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
        return super.getIngredients() + ", Tomato";
    }

    @Override
    public void setPrice(int price) {

    }

    @Override
    public void setIngredients(String ingredientsString) {

    }
}
