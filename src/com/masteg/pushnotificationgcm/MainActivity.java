package com.masteg.pushnotificationgcm;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import org.apache.cordova.*;

public class MainActivity extends DroidGap {

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        super.setBooleanProperty("loadInWebView", true);
        //super.loadUrl("http://coenraets.org/apps/directory/jqmphp/index.php");
        super.loadUrl("http://push.imtechsolutions.info/index.php");
        //super.loadUrl("file:///android_asset/www/index.html");
//        setContentView(R.layout.activity_main);
    }

    //@Override
    //public boolean onCreateOptionsMenu(Menu menu) {
      //  getMenuInflater().inflate(R.menu.activity_main, menu);
        //return true;
    //}
}
