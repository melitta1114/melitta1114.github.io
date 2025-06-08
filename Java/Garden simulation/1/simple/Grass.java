package lab8.simple;
import lab8.Plant;

public class Grass implements Plant{

    public double getOxigenAmountPerYear(){
        return 6.2;
    };

    public int getLifeTime(){
        return 11;
    };

    public String getRepresentation() {
        return String.valueOf(getClass().getSimpleName().charAt(0));
    }
}
