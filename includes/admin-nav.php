<div class="menu">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2"  class="profile-container flex justify-center items-center my-5">
                        
                            <img src="../img/logo.jpg" width="200px" class="">
                    
                    </td>
                
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn <?php if ($page == "home"): ?> menu-active menu-icon-dashbord-active <?php else: ?> menu-icon-dashbord <?php endif; ?>" >
                        <a href="index.php" class="non-style-link-menu <?php if ($page == "home"): ?>non-style-link-menu-active <?php endif; ?>"><div><p class="menu-text">Dashboard</p></a></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-doctor ">
                        <a href="doctors.php" class="non-style-link-menu "><div><p class="menu-text">Doctors</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-schedule ">
                        <a href="schedule.php" class="non-style-link-menu"><div><p class="menu-text">Schedule</p></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn  <?php if ($page == "appointment"): ?> menu-active menu-icon-appoinment-active <?php else: ?> menu-icon-appoinment <?php endif; ?>">
                        <a href="appointment.php" class="non-style-link-menu <?php if ($page == "appointment"): ?>non-style-link-menu-active <?php endif; ?>"><div><p class="menu-text">Appointment</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-patient">
                        <a href="patient.php" class="non-style-link-menu"><div><p class="menu-text">Patients</p></a></div>
                    </td>
                </tr>

            </table>
        </div>