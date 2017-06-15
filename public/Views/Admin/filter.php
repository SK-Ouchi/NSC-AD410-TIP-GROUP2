
<div class="row" id="filters">
    <div class="filter-panel panel">
        <form id="myFilter">
            <div class="filter-button">
                <div>
                    <input type="text" id="textBox" placeholder="Search Table">
                    <button type="button" class="btn btn-primary btn-tiny"  onClick=addTag("textBox")>Apply Filter</button>
                </div>
            </div>

            <div class="filter-button">
                <div>
                    <label>By division</label>
                    <select class="form-control" id="divisions">
                        <option>AHSS</option>
                        <option>HHS</option>
                        <option>BTS</option>
                        <option>BEIT</option>
                        <option>M&amp;S</option>
                        <option>BTS</option>
                        <option>BTS</option>
                        
                    </select>
<!--                    <div class="radio">
                        <label><input type="radio" value="AHSS" name="optradio" onclick=isChecked(this.value) >AHSS</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio"  value="HHS" name="optradio" onclick=isChecked(this.value)>HHS</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="BTS" name="optradio" onclick=isChecked(this.value)>BTS</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="BEIT" name="optradio" onclick=isChecked(this.value)>BEIT</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="LIB" name="optradio" onclick=isChecked(this.value)>LIB</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio"  value="M&amp;S" name="optradio" onclick=isChecked(this.value)>M&amp;S</label>
                    </div>-->
                    
                    <button type="button" class="btn btn-primary btn-tiny"  onClick=addTag("divisions")>Apply Filter</button></div>
            </div>
            <div class="filter-button">
                <div>
                    <label for="sel1">By Academic year:</label>
                    <select class="form-control" id="date">
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                    </select>
                    <button type="button" class="btn btn-primary btn-tiny"  onClick=addTag("date")>Apply Filter</button>
                </div>
            </div>
            <div class="filter-button">
                <div>
                    <label for="sel1">Search Assessments By:</label>
                    <select class="form-control" id="searchBy">
                        <option>Question</option>
                        <option>Answer</option>
                        <option>Course</option>
                        <option>Shared</option>
                    </select>
                    <label></label>
                    <input type="text" id="textBoxAssessment" placeholder="Search Assessments">
                    <button type="button" class="btn btn-primary btn-tiny"  onClick=addTag("assessment")>Apply Filter</button></div>
            </div>
            <div class="filter-button">
                <div>
                    <label for="sel1">Status</label>
                    <select  class="form-control" id="status">
                        <option>Complete</option>
                        <option>In-Progress</option>
                        <option>Not Started</option>
                    </select>
                    <button type="button" class="btn btn-primary btn-tiny" onClick=addTag("status")>Apply Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-10">

        <div id="tagDiv">
        </div>
    </div>
    <div class="col-md-2">
        <button type="button"  class="btn btn-primary btn-tiny clear-filters-button" onClick=clearTags() type="reset">Clear Filters</button>
    </div>
</div>
<script>

</script>
