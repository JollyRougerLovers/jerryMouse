(function(){



window.onload = function () {
    mouse = new  mouseMaster();  
}


var mouseMaster = function () {
    this.xhr = new XMLHttpRequest();
    this.current = 0;
    this.list=[];
    this.url = 'ajaj.php';
    /**
     * net request
     * 
     * @param {object} variable
     * @returns {nothing}
     */
    this.net = function (variable) {
        var get = "";
        for (var propety in variable)
            get += propety + "=" + variable[propety]+"&";
        that.xhr.open('GET', that.url + '?' + encodeURI(get), true);
        that.xhr.responseType = 'json';
        that.xhr.onload = function () {
            that.incomming(that.xhr.status, that.xhr.response);
        };
        that.xhr.send();
    }
    /**
     * 
     * @param {type} status
     * @param {type} response
     * @returns {nothing}
     */
    this.incomming = function (status, response) {
        if (parseInt(status) === 200) {
            if(typeof response.command == "undefined") return false;
            if(response.command == "search") return that.search_result(response);
            if(response.command == "error") return that.error();
            if(response.command == "phone") return that.phone_change(response);            
        }
            that.error();
    }
    /**
     * 
     * @param {type} incomming
     * @returns {String}
     */
    this.autocomplet_line = function (incomming) {
        var out = "";
        for (var i in incomming)
            if (parseInt(i) == that.current){
                out += '<div class="mouse_search_auto_line">' + incomming[i] + '</div>';
            } else  out += '<div class="mouse_search_auto_line_active">' + incomming[i] + '</div>';
        return out;
    }
    /**
     * 
     * @param {type} data
     * @returns {undefined}
     */
    this.autocomplet=function(data){
        if (data)
        if(document.activeElement.id=="mouse_search_input_category"){
            
        }else if(document.activeElement.id=="mouse_search_input_location"){
            
        }
        
    }
    /**
     * 
     * @returns {undefined}
     */
    this.autocomplet_category=function(){
        
    }
    this.autocomplet_location=function(){
        
    }
    this.autocomplet_read=function(str){
        
    }
    this.autocomplet_watch_location=function(){
        
    }    
    /**
     * 
     * @returns {undefined}
     */
    this.search=function(){
        that.load_show();    
        that.net({q:"search", category:document.getElementById("mouse_search_input_category").value, location:document.getElementById("mouse_search_input_location").value});
    }
    /**
     * 
     * @param {type} data
     * @returns {undefined}
     */
    this.search_result=function(data){
        out = "";
        if((typeof data.data == 'undefined')||(data.data.length===0)) return that.search_empty();
        for(var i in data.data)
            out+=that.search_line(data.data[i]);
        document.getElementById('mouse_search_searchResult').innerHTML=out;
        for(var i in data.data)
            out+=that.phone_watch(data.data[i].id);
        that.load_hide();
    }
    /**
     * 
     * @param {type} data
     * @returns {String}
     */
    this.search_line=function(data){
        var out = '<div class="mouse_search_searchResult_each"><div class="mouse_search_searchResult_title">'+data.name+'</div>';
            out+='<div class="mouse_search_searchResult_description">'+data.address+'</div>';
            out+='<div class="mouse_search_searchResult_contact">';
            out+='<div class="mouse_search_searchResult_phone" id="mouse_search_searchResult_phone_'+data.id+'" >click for the number</div>';
            out+='<div class="mouse_search_searchResult_website"><a target="_blank" class="mouse_search_searchResult_website_link" href="https://gidigi.com">https://gidigi.com</a></div>';
            out+='</div></div>';
        return out;
    }
    this.search_empty=function(){
        that.load_hide();
        document.getElementById('mouse_search_searchResult').innerHTML = '<div class="mouse_search_searchResult_empty">Sorry, we have no results</div>';
        
    }    
    /**
     * 
     * @param {type} id
     * @returns {undefined}
     */
    this.phone_get=function(id){
        document.getElementById('mouse_search_searchResult_phone_'+id).innerHTML="processing....";
        that.net({q:'phone',id:id});   
    }
    /**
     * 
     * @param {type} id
     * @returns {undefined}
     */
    this.phone_watch=function(id){
        eval("document.getElementById('mouse_search_searchResult_phone_"+id+"').addEventListener('click', function(){that.phone_get('"+id+"')});");        
    }
    /**
     * 
     * @param {type} data
     * @returns {undefined}
     */
    this.phone_change=function(data){
        document.getElementById('mouse_search_searchResult_phone_'+data.id).innerHTML=data.data;
    }
    this.load_show=function(){
        document.getElementById('mosue_search_screen').style.display = "none";
        document.getElementById('mosue_load_screen').style.display = "block";
    }
    this.load_hide=function(){
        document.getElementById('mosue_search_screen').style.display = "block";
        document.getElementById('mosue_load_screen').style.display = "none";
    }
    this.error=function(){
        document.getElementById('mouse_search_searchResult').innerHTML = '<div class="mouse_search_searchResult_empty">'+" Houston, I believe we've Had a Problem here ... "+'</div>';
        that.load_hide();
    }
    /**
     * 
     * @type mouseMaster
     */
    var that = this;
    document.getElementById("mouse_search_submit").addEventListener('click', that.search); 
    this.load_hide();    
}




var mouse;

})();