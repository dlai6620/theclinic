using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Stats : MonoBehaviour {


    //ensures it has downloaded 
    iEnumerator Start(){
        WWW statsData = new WWW("http://localhost:8080/Clinical_image/index.php");

        //to wait until statsdata is doen downloading 
        yield return statsData;

        string statsdataString = statsData.text;
        print (statsData.text);

    }


}
