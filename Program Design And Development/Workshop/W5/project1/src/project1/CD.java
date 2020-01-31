package project1;
import java.io.Serializable;


/**
 * The CD class represents a CD object. Information about the 
 * CD is stored and can be retrieved.
 * 
 * @author Michael Kolling and David J. Barnes
 * @version 2002-05-04
 */
public class CD extends Item implements Serializable
{
    private String artist;
    private int numberOfTracks;

    /**
     * Constructor for objects of class CD
     * @param theTitle
     * @param theArtist
     * @param tracks
     * @param time
     */
    public CD(String theTitle, String theArtist, int tracks, int time)
    {
        super(theTitle, time);
        artist = theArtist;
        numberOfTracks = tracks;
    }

    /**
     * Return the artist for this CD.
     * @return 
     */
    public String getArtist()
    {
        return artist;
    }

    /**
     * Return the number of tracks on this CD.
     * @return 
     */
    public int getNumberOfTracks()
    {
        return numberOfTracks;
    }

    public String getDetails()
    {
        String details =  artist + "  " + getTitle() +"\n";
        
        details = details +"tracks: " + numberOfTracks + " ";
        details = details +  "playing time " + getPlayingTime() 
        + " mins \n";
        if(getOwn()) 
            details = details + "*" + "\n";
        else 
            details = details + "\n";    
        details = details + "    " + getComment() + "\n";
        return details;
    }
   
/* 
 * original from week 2
   
    public String getDetails()
    {
        String details =  artist + "\n ";
        details = details +"tracks: " + numberOfTracks;
        details = details + super.getDetails();
        return details;
    }
    */
   

}
