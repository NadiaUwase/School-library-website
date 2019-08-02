<section class="toside--h">
    <!--  -->
    <!-- subject highlight computer-->
    <div class="subj-h subj-view">
        <!-- below is the code for recording new books in the library-->
        <form name="Bookrecords" class="contact" method="POST" action="./php-script/bookrecords.php">
            <!--  -->
            <div class="input-wrapper">
                <label for="">Name of the book</label>
                <input name="name" type="text" placeholder="holder">
            </div>
            <div class="input-wrapper">
                <label for="">Edition</label>
                <input name="edition" type="text" placeholder="holder">
            </div>
            <div class="input-wrapper">
                <label for="">Department</label>
                <input name="department" type="text" placeholder="holder">
            </div>
            <div class="input-wrapper">
                <label for="">Category</label>
<<<<<<< HEAD
                <input name="category" type="text" placeholder="holder">
=======
                <select name="category" >
                    <option selected disabled>Select category</option>
                    <option value="">category</option>
                </select>
>>>>>>> a599b981a8a5a5ffd99ac01fd071d836eb2c4889
            </div>
            <div class="input-wrapper">
                <label for="">Author</label>
                <input name="author" type="text" placeholder="holder">
            </div>
             <div class="input-wrapper">
                <label for="">Date of arrival</label>
                <input name="arrivaldate" type="Date" placeholder="holder">
            </div>
             <div class="input-wrapper">
                <label for="">Number of copies</label>
                <input name="copies" type="Number" placeholder="holder">
            </div>
            
            <!--  -->
            <!--  -->
            <div class="submit-btn-h">
                <button type="button" onclick="submitForm()" class="btn btn-black">Submit</button>
            </div>
            <!--  -->
        </form>
    </div>
    <!--  -->
    <!--  -->
</section>