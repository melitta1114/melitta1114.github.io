public class Ciorba implements Soup{
    public String toString(){
        return "Ciorba";
    }
    public void associateMainDish(MainDish mainDish){
        System.out.println("A "+toString()+" leveshez a "+mainDish.toString() + " ajanlott.");
    }
}
