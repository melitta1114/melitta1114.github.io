public class HusLeves implements Soup{
    public String toString(){
        return "Husleves";
    }
    public void associateMainDish(MainDish mainDish){
        System.out.println("A "+toString()+" leveshez a "+mainDish.toString() + " ajanlott.");
    }

}
