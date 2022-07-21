# AuMoK

    <div id="addUserModal" class="addUserModal">

        <div class="modal-content justify-content-center addUserContent" style="text-align: center;">

            <div class="container shadow-lg" style="width: 800px;background-color:white">
                <p id="errorSignUP" style="visibility: hidden;"></p>

                <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="row">
                        <div class="col-11">
                            <h1 style="text-shadow: 2px 2px black;text-align:center">&nbsp;&nbsp; ADD &nbsp;&nbsp;&nbsp; NEW &nbsp;&nbsp;&nbsp; USER</h1>
                        </div>

                        <!-- Button to close popup -->
                        <div class="col-1 center float-end">
                            <div class="mt-1 col-3 float-end justify-content-center closeSignup" id="closeAddUser" style="width: 60px;height: 50px;float:right" onclick="addNewUser()">
                                <img class="mt-1" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 40px; height: 40px;" ; />
                            </div>
                        </div>
                    </div>

                    <!-- First row -->
                    <div class="row center justify-content-center mt-4">

                        <!--  Name -->
                        <div class="col-3 center m-2">

                            <div class="row center form-floating">
                                <input class="form-control" id="Name" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Name" placeholder="Name" required>
                                <label for="floatingInput" style="text-align:center">Last Name</label>
                            </div>

                            <div class="row justify-content-center error">
                                <p id="errorName"></p>
                            </div>
                        </div>

                        <!--  Firstname -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input class="form-control" id="Firstname" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Firstname" placeholder="Firstname" required>
                                <label for="floatingInput" style="text-align:center">Firstname</label>
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorFirstname"></p>
                            </div>
                        </div>

                        <!-- BirthDate -->
                        <div class="col-3 m-2">
                            <div class="row justify-content-center">
                                <input id="birthDate" type="date" name="birthDate" style="vertical-align:top; width: 200px;height:50px;text-align: center;" required />
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorBirthDate"></p>
                            </div>
                        </div>

                    </div>

                    <!-- Thirth row -->
                    <div class="row mt-5 justify-content-center">

                        <!-- Mail -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="eMail" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="eMail" placeholder="eMail">
                                <label for="floatingInput" style="text-align:center">@_Adress eMail_@</label>
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorEMail"></p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input class="form-control" id="Phone" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Phone" placeholder="Phone" required>
                                <label for="floatingInput" style="text-align:center">Phone Number</label>
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorPhone"></p>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="col-3 m-2">
                            <div class="row form-floating  justify-content-center">
                                <input class="form-control" id="Username" style="width: 200px;height:50px;text-align:center" type="text" name="Username" placeholder="Username" required>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="row error  justify-content-center">
                                <p id="errorUsername"></p>
                            </div>
                        </div>

                    </div>


                    <!-- Fith row -->
                    <div class="row mt-5 justify-content-center">

                        <!-- Pwd -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="Password" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password" placeholder="Password" required>
                                <label for="floatingInput" style="text-align:center">Password</label>
                            </div>
                        </div>

                        <!-- Pwd2 -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="Password2" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password2" placeholder="Password2">
                                <label for="floatingInput" style="text-align:center">Your Password Again</label>
                            </div>
                        </div>

                    </div>


                    <!-- Sixth row -->
                    <div class="row mt-2 justify-content-center">

                        <!-- Erreur Pwd -->
                        <div class="col-6 error">
                            <p id="errorPassword"></p>
                        </div>

                    </div>

                    <!-- Seventh row -->
                    <div class="row mt-3 justify-content-center">

                        <!-- Erreur Pwd -->
                        <div class="col-6">
                            <!--  Hidden to match up pwds -->
                            <!-- <input id="isSame" /> -->
                            <input type="hidden" id="isSame" />
                        </div>

                    </div>

                    <!-- Eigth row -->
                    <!-- Button Add to confirm informations -->
                    <div class="row mt-3 justify-content-center">

                        <!-- Add -->
                        <div class="col-6 mb-4">
                            <button class="btn btn-success" type="submit" style="margin: 0 auto;width: 150px;" name="addUser">
                                Add <img class="m-1" src="/dashboard/AuMoK/Images/iconPlus.png" style="width: 20px; height: 20px;" ; />
                            </button>
                        </div>

                    </div>

                </form>
            </div>

        </div>

    </div>