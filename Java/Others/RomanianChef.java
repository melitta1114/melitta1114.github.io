public class RomanianChef implements Chef{
    public Soup prepareSoup(){
        return new Ciorba();
    }
    public MainDish prepareMainDish(){
        return new MiciCuPaineSiMustar();
    }
}
