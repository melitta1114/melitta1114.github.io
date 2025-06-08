package lab8;
import lab8.composite.Field;
import lab8.composite.Forest;
import lab8.simple.Flower;
import lab8.simple.Grass;
import lab8.simple.Mushroom;
import lab8.simple.OakTree;
import lab8.simple.PineTree;


public class Main {

    public static void main(String[] args) {

        Field field1 = new Field(); //elso field
        Field field2 = new Field(); //masodik field
        Forest forest = new Forest();

        Grass G = new Grass();
        Flower F = new Flower();
        Mushroom M1 = new Mushroom();
        Mushroom M2 = new Mushroom();
        OakTree O = new OakTree();
        PineTree P = new PineTree();

        field1.add(G);
        field1.add(F);
        field2.add(M1);
        field2.add(M2);
        forest.add(field1);
        forest.add(field2);
        forest.add(P);
        forest.add(O);

        System.out.println("Field1:");
        System.out.println("Reprezentacio: " + field1.getRepresentation());
        System.out.println("Oxigenmennyiseg: " + field1.getOxigenAmountPerYear());
        System.out.println("Elettartam: " + field1.getLifeTime());

        System.out.println("\nField2:"); // a \n sortorest jelent
        System.out.println("Reprezentacio: " + field2.getRepresentation());
        System.out.println("Oxigenmennyiseg: " + field2.getOxigenAmountPerYear());
        System.out.println("Elettartam: " + field2.getLifeTime());

        System.out.println("\nForest:");
        System.out.println("Reprezentacio: " + forest.getRepresentation());
        System.out.println("Oxigenmennyiseg: " + forest.getOxigenAmountPerYear());
        System.out.println("Elettartam: " + forest.getLifeTime());
    }
}

