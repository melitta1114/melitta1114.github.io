import java.awt.*;

public interface Pizza {
    void bake(Graphics g);

    int getPrice();

    String getIngredients();

    void setPrice(int price);

    void setIngredients(String ingredientsString);
}
