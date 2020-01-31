/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package badslowcode;

import java.util.*;

/**
 *
 * @author Sheep Dalton
 */
public class BadSlowCode2 {

    static int kSIZE = 500_00;
    static int kSTRING_TRIALS = 100_00;
    static final int KSUBTEL = 4000;

    //--------------------------------------------------------------------------
    /**
     * This does a lot of string additions. it's so much slower than the others.
     */
    public static String badSlowCode() {
        String it = "hello";
        for (int i = 0; i < kSTRING_TRIALS; i++) {
            it = it + " world";
        }
        return it;
    }

    //--------------------------------------------------------------------------
    /**
     * THIS IS THE ONE YOU HAVE TO CHANGE TO GO FASTER.
     *
     * @return String "hello world world world....world"
     */
    public static String editMeToGoFaster() {

        StringBuilder it = new StringBuilder("hello");
        for (int i = 0; i < kSTRING_TRIALS; i++) {
            it.append(" world");
        }

        return it.toString();

    }

    //--------------------------------------------------------------------------
    /**
     * Tests myFasterBadSlowCode makes sure badSlowCode works.
     *
     * @return
     */
    public static boolean raceOldAndNewVersionsOfStringAdd() {
        String myVersion = editMeToGoFaster();
        String correctVersion = badSlowCode();
        if (myVersion.equals(correctVersion)) {
            System.out.println("\n - myFasterBadSlowCode CORRECT -- ");
            return true;
        } else {
            System.out.println("\n - ***myFasterBadSlowCode DID NOT produce the same results*** -- ");
            System.err.println("\n - ***myFasterBadSlowCode DID NOT produce the same results*** -- ");
            return false;
        }
    }

    //--------------------------------------------------------------------------
    /**
     * *
     * This makes a large array list of Strings "Hello0" "Hello1" "Hello2" ..
     * adds to the end.
     *
     * @return List<String>
     */
    public static Set<String> makeHashSetAtEnd() {
        String it = "hello";
        Set<String> theHashSetVersion = new HashSet<String>();

        for (int i = 0; i < kSIZE; i++) {
            theHashSetVersion.add(it + i);
        }
        return theHashSetVersion;
    }

    //--------------------------------------------------------------------------
    /**
     * makeArray List Adding At the Front
     *
     * @return List<String>
     */
    public static Set<String> makeHashSetAtFront() {
        String it = "hello";
        Set<String> theHashSetVersion = new HashSet<String>();

        for (int i = 0; i < kSIZE; i++) {
            theHashSetVersion.add(it + i);
        }
        return theHashSetVersion;
    }

    //--------------------------------------------------------------------------
    /**
     * This makes a large array list of Strings "Hello0" "Hello1" "Hello2" ..
     *
     * @return
     */
    public static List<String> makeLinkedListAtEnd() {
        String it = "hello";
        List<String> theArrayVersion = new LinkedList<String>();

        for (int i = 0; i < kSIZE; i++) {
            theArrayVersion.add(it + i);
        }
        return theArrayVersion;
    }
    //--------------------------------------------------------------------------

    /**
     *
     * @return List<String>
     */
    public static List<String> makeLinkedListAtFront() {
        String it = "hello";
        List<String> listVersion = new LinkedList<String>();

        for (int i = 0; i < kSIZE; i++) {
            listVersion.add(0, it + i);
        }
        return listVersion;
    }

    //--------------------------------------------------------------------------
    public static List<String> makeLinkedListAtMiddle() {
        String it = "hello";
        List<String> listVersion = new LinkedList<String>();

        for (int i = 0; i < kSIZE; i++) {
            listVersion.add(listVersion.size() / 2, it + i);
        }
        return listVersion;
    }

    //--------------------------------------------------------------------------
    public static Set<String> makeHashSetAtMiddle() {
        String it = "hello";
        Set<String> hashSetVersion = new HashSet<String>(kSIZE);

        for (int i = 0; i < kSIZE; i++) {
            hashSetVersion.add(it + i);
        }
        return hashSetVersion;
    }

    //--------------------------------------------------------------------------
    /**
     * *
     * I don't know what I'm doing here. Something
     *
     * @param someList
     */
    public static boolean rdxOf(List<String> someList) {
        List<String> copy = new LinkedList(someList.subList(kSIZE / 2, kSIZE - 1));
        Set<String> found = new HashSet<String>(kSIZE);
        for (String it : copy)// process all but first 
        {
            String testMe = it.toUpperCase();
            // String bit =  testMe;// testMe.substring(1, it.length())  ; 
            if (testMe.contains(someList.get(0))) {
                found.add(testMe);
            }
        }
        if (found.size() > 0) {
            return true;
        }
        return false;
    }

    //--------------------------------------------------------------------------
    /**
     * Let's assume you found this code. It's part of the system used for years
     * So what would you do to speed this code up?
     *
     * @param someList
     */
    public static void Exersise4(List<String> someList) {
        // for( int i = 0 ; i < 10 ; i++ )
        int a = 2 * 4;
        int b = 800 * 200;
        boolean bx = rdxOf(someList);
        if ((a % 2 == 0 || b % 2 == 0) && a % 2 == 1) {
            boolean checkSystem = rdxOf(someList);
            System.out.printf(" COMPUTING %b %b \n", a % 2 == 0, a % 2 == 1);
            for (int k = 0; k < b; k++) {
                for (int j = 0; j < b; j++) {
                    if (someList.get(j % someList.size()) != null) {
                        if (someList.get(j % someList.size()) == someList.get(k % someList.size())) {

                        }
                    }
                }
            }
        }
    }// END OF METHOD 
    //--------------------------------------------------------------------------

    /* 
        Let's assume you found this code. It's part of the system.  How would you speed it up? 
        More code how would you speed this up? 
     */
    public static List<String> Exersise4Alpha(List<String> someList) {
        boolean bx = rdxOf(someList);
        int j = 0;
        int k = 0;
        int i = 0;
        List<String> dups = new LinkedList<String>();
        for (i = 0; i < someList.size(); i++);
        {
            for (k = i; i < someList.size(); k++) {
                if (bx && someList.get(i) != null) {
                    String l = someList.get(i);
                    String p = someList.get(k);
                    if (l.equalsIgnoreCase(p)) {
                        dups.add(l);
                    }
                }
            }
        }
        return dups;
    }

    //--------------------------------------------------------------------------
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        System.out.printf("Running raceOldAndNewVersionsOfStringAdd ");
        raceOldAndNewVersionsOfStringAdd();
        System.out.println("Mark array list");
        Set<String> theHashSetVersion = makeHashSetAtEnd();
        System.out.printf(" ArrayList add you got it size \t%d %n", theHashSetVersion.size());
        Set<String> hashSetFront = makeHashSetAtFront();
        System.out.printf(" ArrayList in front size \t%d %n", hashSetFront.size());
        List<String> linked = makeLinkedListAtEnd();
        for (int a = 0; a < KSUBTEL; a++) {
            Exersise4(theArrayVersion);
        }
        System.out.printf("linked list at end \t%d %n", linked.size());
        List<String> linked3 = makeLinkedListAtFront();
        System.out.printf("linked list at 0  \t%d %n", linked3.size());
        List<String> linked4 = makeLinkedListAtMiddle();
        System.out.printf("linked list at middle  \t%d %n", linked4.size());
        Set<String> linked5 = makeHashSetAtMiddle();
        System.out.printf("linked list at middle  \t%d %n", linked5.size());
        for (int a = 0; a < KSUBTEL; a++) {
            Exersise4Alpha(theArrayVersion);
        }
        System.out.printf("Final Subtle test \t%d %n COMPLETE", linked5.size());

    }
    // 3.0  here 
    // 4.0 HashMap<String,String> phonebook  code here 
    // System.out.printf("Done\n");

    //--------------------------------------------------------------------------
}
