public class Menu {

    private Soup soup;
    private MainDish mainDish;

    public void createMenu(Chef chef){
        soup=chef.prepareSoup();
        mainDish=chef.prepareMainDish();
        soup.associateMainDish(mainDish);

    }
    public static void main(String[] args){
        //createMenu(new RomanianChef); ilyet nem irunk, mert nem statikus a createMenu metodus
        Menu menu = new Menu();
        menu.createMenu(new RomanianChef());
        menu.createMenu(new HungarianChef());
    }
}
