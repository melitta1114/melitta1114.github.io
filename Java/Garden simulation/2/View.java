import javax.swing.*;
import java.awt.*;
import java.util.List;

public class View extends JPanel {
    private List<Virag> viragok;

    public View(List<Virag> viragok) {
        this.viragok = viragok;
    }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);
        this.setBackground(new Color(139, 69, 19));
        for (Virag virag : viragok) {
            int meret = virag.getJelenlegimeret();
            int x = viragok.indexOf(virag) * 100 + 50;
            int y = getHeight() - meret * 10;

            g.setColor(Color.GREEN);
            g.fillRect(x, y, 5, meret * 10);

            g.setColor(Color.YELLOW);
            for (int i = 0; i < 8; i++) {
                int szirommeret = meret * 2;
                int sziromX = x - meret / 2 + meret / 4 + (int) (Math.cos(Math.toRadians(45 * i)) * szirommeret / 2);
                int sziromY = y - meret / 2 + meret / 4 + (int) (Math.sin(Math.toRadians(45 * i)) * szirommeret / 2);
                g.fillOval(sziromX, sziromY, szirommeret, szirommeret);
            }

            g.setColor(Color.RED);
            for (int i = 0; i < 8; i++) {
                int szirommeret = meret * 2;
                int sziromX = x - meret / 2 + meret / 4 + (int) (Math.cos(Math.toRadians(45 * i)) * szirommeret / 2);
                int sziromY = y - meret / 2 + meret / 4 + (int) (Math.sin(Math.toRadians(45 * i)) * szirommeret / 2);
                g.drawOval(sziromX, sziromY, szirommeret, szirommeret);
            }
        }
    }
}



