package project1;
import java.io.Serializable;


/**
 * The Item class represents a multi-media item.
 * Information about the item is stored and can be retrieved.
 * This class serves as a superclass for more specific items.
 */
public abstract class Item implements Serializable
{
    private String title;
    private int playingTime;
    private boolean gotIt;
    private String comment;

    /**
     * Initialise the fields of the item.
     * @param theTitle
     * @param time
     */
    public Item(String theTitle, int time)
    {
        title = theTitle;
        playingTime = time;
        gotIt = false;
        comment = "";
    }

    /**
     * Enter a comment for this item.
     * @param comment
     */
    public void setComment(String comment)
    {
        this.comment = comment;
    }

    /**
     * Return the comment for this item.
     * @return comment
     */
    public String getComment()
    {
        return comment;
    }

    /**
     * Set the flag indicating whether we own this item.
     * @param ownIt
     */
    public void setOwn(boolean ownIt)
    {
        gotIt = ownIt;
    }

    /**
     * Return information whether we own a copy of this item.
     * @return gotIt
     */
    public boolean getOwn()
    {
        return gotIt;
    }
    
    public String getTitle()
    {
        return title;
    }
    
    public int getPlayingTime()
    {
        return playingTime;
    }

    public abstract  String getDetails();
  
}
