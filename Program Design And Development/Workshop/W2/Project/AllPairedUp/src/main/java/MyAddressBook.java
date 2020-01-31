
import java.util.Arrays;
import java.util.Objects;

/**
 *
 * @author w18013678
 * @param <T>
 *
 */
public class MyAddressBook<T> {

    String namesSorted[];
    T addressedMatched;
    /**
     * 
     * @param namesThatAreSorted
     * @param addresses 
     */
    public MyAddressBook(String namesThatAreSorted[], T addresses) {
        this.namesSorted = namesThatAreSorted;
        this.addressedMatched = addresses;
    }

    @Override
    public int hashCode() {
        int hash = 5;
        return hash;
    }

    public String[] getNamesSorted() {
        return namesSorted;
    }

    public void setNamesSorted(String[] namesSorted) {
        this.namesSorted = namesSorted;
    }

    public T getAddressedMatched() {
        return addressedMatched;
    }

    public void setAddressedMatched(T addressedMatched) {
        this.addressedMatched = addressedMatched;
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
        final MyAddressBook<?> other = (MyAddressBook<?>) obj;
        if (!Arrays.deepEquals(this.namesSorted, other.namesSorted)) {
            return false;
        }
        if (!Objects.equals(this.addressedMatched, other.addressedMatched)) {
            return false;
        }
        return true;
    }

    /**
     * Internal method to look for index of name. Note its okay to assume that
     * nameSorted is index.
     *
     * @param name
     * @param return
     */
    private int lookUpIndexOf(String name) {
        int index = 0; //not found
        for (String s : namesSorted) {
            if (s.equalsIgnoreCase(name)) {
                return index;
            }
            index += 1; // or index++
        }
        return -1; //not found
    }

    Object get(String what) {
        assert what != null : "no null arguments";
        int index = lookUpIndexOf(what);
        if (index == -1) {
            return null;
        }
        return addressedMatched;
    }

    public static void main(String[] args) {
        MyAddressBook<String> names = new MyAddressBook<>{"A","B","C","D","E","F"};
        System.out.printf("%s \n", names.toString());
        MyAddressBook<Integer> numbers = new MyAddressBook<>(1,2,3,4,5,6);

        PairBefore rockwood = new PairBefore("Rockwood", "I am not a number.");

        rockwood.setSecond(0b11111111); // bug not caught by compiler
        System.out.printf("This actually is allowed %s \n", rockwood.toString());

        rockwood = jenny; //Yeah this is permitted.
    
    }
}
