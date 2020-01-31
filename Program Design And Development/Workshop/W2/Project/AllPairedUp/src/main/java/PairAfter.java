
import java.util.Objects;

/**
 *
 * @author w18013678 I am saying that the PairAfter has a type, but not what the
 * type is.
 * @param <T>
 */
public class PairAfter<T> {

    //We are saying that 'T' is a type that is undefined.
    String first;
    T Second;

    public PairAfter(String first, T Second) {
        this.first = first;
        this.Second = Second;
    }

    public String getFirst() {
        return first;
    }

    public void setFirst(String first) {
        this.first = first;
    }

    public T getSecond() {
        return Second;
    }

    public void setSecond(T Second) {
        this.Second = Second;
    }

    @Override
    public int hashCode() {
        int hash = 7;
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
        final PairAfter<?> other = (PairAfter<?>) obj;
        if (!Objects.equals(this.first, other.first)) {
            return false;
        }
        if (!Objects.equals(this.Second, other.Second)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "PairAfter{" + "first=" + first + ", Second=" + Second + '}';
    }

    /**
     * PairAfter<Integer> is telling us that the object being added that was not
     * defined (T) HAS to be an integer.
     *
     * PairAfter<String> is telling us that the object being added that was not
     * defined (T) HAS to be a String.
     *
     * @param args
     */
    public static void main(String[] args) {
        PairAfter<Integer> jenny = new PairAfter<>("Jenny", 5142);
        System.out.printf("%s \n", jenny.toString());

        PairAfter<String> rockwood = new PairAfter<>("Rockwood", "I am not a Number");

        // rockwood = jenny; // this will now NOT compile.
        PairAfter<Integer> kayla = new PairAfter<>("Kayla", 1066);
        kayla = jenny; // this is okay because jenny has been defined as an 
        // integer, and kayla has also. they match types.
    }

}
