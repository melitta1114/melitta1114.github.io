package lab8.composite;
import lab8.Plant;
import java.util.ArrayList;

public class Forest implements Plant{

    private ArrayList<Plant> list = new ArrayList<>();

    public void add(Plant plant){
        list.add(plant);
    };

    public void remove(Plant plant){
        list.remove(plant);
    };

    public double getOxigenAmountPerYear(){
        double totalOxigen = 0.0;
        for (Plant plant : list) {
            totalOxigen += plant.getOxigenAmountPerYear();
        }
        return totalOxigen;
    };

    public int getLifeTime(){
        int maxLifeTime = 0;
        for (Plant plant : list) {
            maxLifeTime = Math.max(maxLifeTime, plant.getLifeTime());
        }
        return maxLifeTime;
    };

    public String getRepresentation(){
        StringBuilder representation = new StringBuilder("{");
        for (Plant plant : list) {
            representation.append(plant.getRepresentation()).append(", ");
        }
        if (!list.isEmpty()) {
            representation.delete(representation.length() - 2, representation.length());
        }
        representation.append("}");
        return representation.toString();
    };
}


