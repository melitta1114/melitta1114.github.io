public class HungarianChef implements Chef{
    public Soup prepareSoup(){
        return new HusLeves();
    }
    public MainDish prepareMainDish(){
        return new ToltottKaposzta();
    }
}
