
import java.util.Objects;

/**
 * Class for workshop Week 2. converts object based class into a class based on
 * modern generics.
 *
 * @author w18013678
 */
public class PairBefore {

    /**
     *
     * @param Second
     * @param first
     */
    private String first;
    private Object Second;

    public PairBefore(String first, Object Second) {
        this.first = first;
        this.Second = Second;
    }

    /**
     * returns the string in first.
     *
     * @return first
     */
    public String getFirst() {
        return first;
    }

    /**
     * returns the object in Second.
     *
     * @return Second
     */
    public Object getSecond() {
        return Second;
    }

    public void setFirst(String first) {
        this.first = first;
    }

    public void setSecond(Object Second) {
        this.Second = Second;
    }

    @Override
    public String toString() {
        return "PairBefore{" + "first=" + first + ", Second=" + Second + '}';
    }

    @Override
    public int hashCode() {
        int hash = 5;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final PairBefore other = (PairBefore) obj;
        if (!Objects.equals(this.first, other.first)) {
            return false;
        }
        return Objects.equals(this.Second, other.Second);
    }

    /**
     * Right click and select run file
     *
     * @param args
     */
    public static void main(String[] args) {
        PairBefore jenny = new PairBefore("Jenny", 5142);
        System.out.printf("%s \n", jenny.toString());

        PairBefore rockwood = new PairBefore("Rockwood", "I am not a number.");

        rockwood.setSecond(0b11111111); // bug not caught by compiler
        System.out.printf("This actually is allowed %s \n", rockwood.toString());

        rockwood = jenny; //Yeah this is permitted.
    }
}
