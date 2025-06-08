public class Virag {
    private int jelenlegimeret;
    private int maxmeret;
    private boolean novekedes;

    public Virag(int maxSize) {
        this.jelenlegimeret = 1;
        this.maxmeret = maxSize;
        this.novekedes = true;
    }

    public int getJelenlegimeret() {
        return jelenlegimeret;
    }

    public void grow() {
        if (novekedes && jelenlegimeret < maxmeret) {
            jelenlegimeret += 1;
        } else {
            novekedes = false;
        }
    }
}


