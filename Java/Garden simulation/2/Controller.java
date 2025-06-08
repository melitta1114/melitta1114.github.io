import java.util.List;

public class Controller extends Thread {
    private List<Virag> viragok;
    private View view;

    public Controller(List<Virag> viragok, View view) {
        this.viragok = viragok;
        this.view = view;
    }

    @Override
    public void run() {
        while (true) {
            for (Virag virag : viragok) {
                virag.grow();
            }
            view.repaint();
            try {
                Thread.sleep(1000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        }
    }
}


