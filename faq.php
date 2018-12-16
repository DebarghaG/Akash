<?php
$homepage = true;
include("header.php"); ?>

<style media="screen">
  /* This css is also on the main style.css file, put it here for reference */
  table tr {font-size: 14px;}
  table tbody td, table tbody th {padding: 5px 15px 3px 15px;}
  table tbody, table tfoot, table thead {background-color: #e6e8ef;}
  #faq-glossory {margin-bottom: 80px;}
  #faq-glossory tr td:first-child {font-family: 'poppinssemibold'; font-weight: normal; font-style: normal; line-height: 14px;}
  .accordion .accordion-title {padding: 20px 30px 20px 0px; text-decoration: none;}
</style>

<section id="faq">
    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-6 cell">
            <h2>Glossary</h2>
            <table id="faq-glossory">
                <tbody>
                <tr><td>AAI</td><td> Airports Authority of India</td></tr>
                <tr><td>ADS-B</td><td> Automatic Dependent Surveillance - Broadcast</td></tr>
                <tr><td>AGL</td><td> Above Ground Level</td></tr>
                <tr><td>ATC</td><td> Air Traffic Control</td></tr>
                <tr><td>BCAS</td><td> Bureau of Civil Aviation Security</td></tr>
                <tr><td>CAR</td><td> Civil Aviation Requirements</td></tr>
                <tr><td>DGCA</td><td> Directorate General of Civil Aviation</td></tr>
                <tr><td>DGFT</td><td> Directorate General of Foreign Trade</td></tr>
                <tr><td>FTO</td><td> Flying Training Organisation</td></tr>
                <tr><td>GPS</td><td> Global Positioning System</td></tr>
                <tr><td>IAF</td><td> Indian Air Force</td></tr>
                <tr><td>ICAO</td><td> International Civil Aviation Organization</td></tr>
                <tr><td>IPC</td><td> Indian Penal Code</td></tr>
                <tr><td>MHA</td><td> Ministry of Home Affairs</td></tr>
                <tr><td>MoCA</td><td> Ministry of Civil Aviation</td></tr>
                <tr><td>MoD</td><td> Ministry of Defence</td></tr>
                <tr><td>MTOW</td><td> Maximum Take-off Weight</td></tr>
                <tr><td>NPNT</td><td> No Permission-No Take off</td></tr>
                <tr><td>PPL</td><td> Private Pilot License</td></tr>
                <tr><td>RF-ID</td><td> Radio Frequency Identification</td></tr>
                <tr><td>RPA</td><td> Remotely Piloted Aircraft</td></tr>
                <tr><td>RPAS</td><td> Remotely Piloted Aircraft System(s)</td></tr>
                <tr><td>RPS</td><td> Remote Pilot Station(s)</td></tr>
                <tr><td>SIM</td><td> Subscriber Identity Module</td></tr>
                <tr><td>UA</td><td> Unmanned Aircraft</td></tr>
                <tr><td>UAOP</td><td> Unmanned Aircraft Operator Permit</td></tr>
                <tr><td>UAS</td><td> Unmanned Aircraft System(s)</td></tr>
                <tr><td>UIN</td><td> Unique Identification Number</td></tr>
                <tr><td>VFR</td><td> Visual Flight Rules</td></tr>
                <tr><td>VLOS</td><td> Visual Line-Of-Sight</td></tr>
                <tr><td>VMC</td><td> Visual Meteorological Conditions </td></tr>
                </tbody>
            </table>
        </div>
        <div class="large-12 cell">
          <h2>FAQ</h2>

          <ul class="accordion" data-accordion data-allow-all-closed="true">
            <li class="accordion-item is-active" data-accordion-item>
              <a href="#" class="accordion-title">1. What is a drone and UAS?</a>
              <div class="accordion-content" data-tab-content>
                <p>
                Drone is a layman terminology for Unmanned Aircraft (UA). There are three subsets of
                Unmanned Aircraft, a) Remotely Piloted Aircraft, b) Autonomous Aircraft and c) Model
                Aircraft.
                </p>
                <p>
                An aircraft and its associated elements, which are operated with no pilot on board is called
                as Unmanned Aircraft System (UAS).
                </p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">2. What is Remotely Piloted Aircraft System (RPAS) and its categories?</a>
              <div class="accordion-content" data-tab-content>
                <p>
                RPAS is one subset of UAS. A remotely piloted aircraft (RPA), its associated remote pilot
                station(s), the required command and control links and any other components, as
                specified in the type design.</p>
                <p>
                Civil RPA is categorized in accordance with MTOW (including payload) as indicated
                below:
                </p>
                <table>
                    <tbody>
                        <tr><td>Nano </td><td> Less than or equal to 250 grams.</td></tr>
                        <tr><td>Micro </td><td> Greater than 250 grams and less than or equal to 2 kg.</td></tr>
                        <tr><td>Small </td><td> Greater than 2 kg and less than or equal to 25 kg.</td></tr>
                        <tr><td>Medium </td><td> Greater than 25 kg and less than or equal to 150 kg.</td></tr>
                        <tr><td>Large </td><td> Greater than 150 kg. </td></tr>
                    </tbody>
                </table>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">3. What does Civil Aviation Requirements (CAR) mean, and when the same on
                Remotely Piloted Aircraft System (RPAS) will be effective? </a>
              <div class="accordion-content" data-tab-content>
                <p>Civil Aviation Requirements (CAR) is a set of regulations issued by the Directorate General of Civil Aviation (DGCA). The CAR on RPAS shall be effective from 1st December, 2018. </p>
              </div>
            </li>

            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">4. What is Digital Sky Platform, and when it will be operational? </a>
              <div class="accordion-content" data-tab-content>
                <p>It is an online IT platform developed for handling UIN, UAOP applications, permission to fly drones in India. The link shall be available in Homepage of DGCA website <a href="http://www.dgca.nic.in" target="_blank">www.dgca.nic.in</a>, and it will be operational from 1st December, 2018. </p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">5. What permissions are required to operate drones and from where?</a>
              <div class="accordion-content" data-tab-content>
                <p>
                    Roles & responsibilities of govt. stakeholders on various aspects of operation of civil
                    remotely piloted aircraft system
                </p>
                <table>
                    <thead>
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Stakeholder
                            </th>
                            <th>
                                Responsibility
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td>1. </td>
                            <td>Directorate General of Civil Aviation</td>
                            <td>
                                <p>Import clearance </p>
                                <p>Issuance of UIN </p>
                                <p>Issuance & renewal of UAOP</p>
                                <p>
                                    Suspension / Cancellation of UIN &
                                    UAOP in case of violations of
                                    regulations.
                                </p>
                            </td>
                        </tr>

                        <tr >
                            <td>2. </td>
                            <td>Directorate General of Foreign Trade </td>
                            <td>
                                <p>Import license</p>
                            </td>
                        </tr>

                        <tr >
                            <td>3. </td>
                            <td>Ministry of Home Affairs</td>
                            <td>
                                <p>Security clearance </p>
                            </td>
                        </tr>

                        <tr >
                            <td>4. </td>
                            <td>Ministry of Defence </td>
                            <td>
                                <p>Permission for aerial survey/imageries/
                                videography/ still photography over the
                                restricted/prohibited areas on case-tocase
                                basis </p>
                            </td>
                        </tr>

                        <tr >
                            <td>5. </td>
                            <td>Indian Air Force </td>
                            <td>
                                <p>Air Defence Clearance</p>
                                <p>Monitoring of RPA movements in thecountry </p>
                            </td>
                        </tr>

                        <tr >
                            <td>6. </td>
                            <td>Wireless Planning and Coordination Wing, DoT</td>
                            <td>
                                <p>Equipment Type Approval (ETA) or License for drone </p>
                            </td>
                        </tr>

                        <tr >
                            <td>7. </td>
                            <td>Bureau of Civil Aviation Security </td>
                            <td>
                                <p>Approval of Security Programme</p>
                            </td>
                        </tr>

                        <tr >
                            <td>8. </td>
                            <td>Airport Authority of India  </td>
                            <td>
                                <p>Flight Plan Approval </p>
                                <p>Monitoring of RPA movements in the country  </p>
                            </td>
                        </tr>

                        <tr >
                            <td>9. </td>
                            <td>Local Police Office</td>
                            <td>
                                <p>Enforcement of violators as per applicable IPCs</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </li>

            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">6. What are the requirements for import of Drones (with or without camera) in India? </a>
              <div class="accordion-content" data-tab-content>
              <ul>
                    <li>
                    <p>Any entity intending to import RPAS in India shall obtain Equipment Type Approval (ETA) from WPC Wing, Department of Telecommunication for operating in de-licensed frequency band(s). Such approval shall be valid for a particular make and model.</p>
                    </li>
                    <li>
                    <p>The applicant, other than Nano category, shall apply to DGCA along with ETA for import clearance. Based upon the import clearance issued by DGCA, DGFT shall issue license for import of RPAS. </p>
                    </li>
              </ul>
              </div>
            </li>

            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">7. What is NPNT and how do I comply with that?</a>
              <div class="accordion-content" data-tab-content>
                <p>NPNT or ‘No Permission – No Take-off” is a software programme that enables every RPA (except Nano) to obtain a valid permissions through digital sky platform before operating in India. Please contact your OEM/ Manufacturer for complying with this requirement.</p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">8. What is controlled and uncontrolled airspace? </a>
              <div class="accordion-content" data-tab-content>
                <p><strong>Controlled airspace</strong> is <strong>airspace</strong> of defined dimensions within which ATC services are provided.</p>
                <p><strong>Uncontrolled airspace</strong> is <strong>airspace</strong> where an Air Traffic Control (ATC) service is not necessary or cannot be provided for practical reasons.</p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">9. I am intending to locally purchase one drone operating in de-licensed frequency band, should I still require ETA from WPC Wing, DoT? </a>
              <div class="accordion-content" data-tab-content>
                <p>ETA from WPC Wing is required for all wireless equipment working in de-licensed frequency band(s) in India. Ensure to get ETA from the seller or manufacturer of RPA which is required to be uploaded while applying for UIN. </p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">10. Whether drones fall under the category of restricted items for carrying in hand baggage in aircrafts? </a>
              <div class="accordion-content" data-tab-content>
                <p>Drones are restricted items and can’t be carried in hand baggage. </p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">11. Where can I find the filing instructions for UIN/ UAOP etc.? </a>
              <div class="accordion-content" data-tab-content>
                <p>Instructions for filing all applications online shall be available in Digital Sky Manual. The Manual will be available in DGCA website homepage <a href="http://www.dgca.nic.in" target="_blank">www.dgca.nic.in</a> , and also in the Digital Sky portal homepage. The Digital sky manual shall be available in the above mentioned website from 1st December, 2018. </p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">12. I am a foreigner and want to fly drones in India. What are the permission do I require? </a>
              <div class="accordion-content" data-tab-content>
                <p>Foreigners are currently not allowed to fly drones in India. For commercial purpose, they need to lease RPAS to an Indian entity who in-turn will obtain Unique Identification Number (UIN) and UAOP from DGCA.  </p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">13. What is UIN? </a>
              <div class="accordion-content" data-tab-content>
                <p>UIN is unique identification number issued by DGCA for a particular RPA (except Nano).</p>
              </div>
            </li>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">14. How much is the fees for UIN & UAOP? </a>
              <div class="accordion-content" data-tab-content>
                <ul>
                    <li><strong>For UIN</strong>: - One thousand Indian Rupees (Rs.1000/-). </li>
                    <li><strong>For fresh UAOP</strong> :- Twenty Five Thousand Rupees (Rs.25,000/-) </li>
                    <li><strong>For Renewal of UAOP</strong>:- Ten Thousand Rupees (Rs.10,000/-) </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<div class="clearfix"></div>


<?php include("footer.php");
