public class ChineseChef implements Chef{

    @Override
    public Soup prepareSoup() {
        return new KlangBakKurtTehSoup();
    }

    @Override
    public MainDish prepareMainDish() {
        return new KungPaoChicken();
    }
}
