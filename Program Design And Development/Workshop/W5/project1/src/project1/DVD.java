package project1;
import java.io.Serializable;


/**
 * The dvd class represents a DVD object. Information about the 
 * DVD is stored and can be retrieved.
 * 
 * @author Michael Kolling and David J. Barnes
 * @version 2002-05-04
 */
public class DVD extends Item implements Serializable
{
    private String director;

    /**
     * Constructor for objects of class DVD
     * @param theTitle
     * @param theDirector
     * @param time
     */
    public DVD(String theTitle, String theDirector, int time)
    {
        super(theTitle, time);
        director = theDirector;
    }

    /**
     * Return the director for this DVD.
     * @return 
     */
    public String getDirector()
    {
        return director;
    }

    public String getDetails()
    {
        String details =  director + " " + getTitle() + "\n ";
        details = details  + "playing time : " + getPlayingTime() 
        + " mins \n";
        if(getOwn()) 
            details = details + "*" + "\n";
        else 
            details = details + "\n";    
        details = details + "    " + getComment() + "\n";
        return details;
    }

    /*
     * orignal from week 2

    public String getDetails()
    {
    String details =  director + "\n ";
    details = details + super.getDetails();
    return details;
    }
     */  

}