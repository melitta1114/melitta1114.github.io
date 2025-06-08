public class KlangBakKurtTehSoup implements Soup{


    public String toString(){
        return getClass().getSimpleName();
    };
    @Override
    public void associateMainDish(MainDish mainDish) {
        System.out.println("A "+toString()+" leveshez a "+mainDish.toString() + " foetelt tarsitottam.");
    }
}
