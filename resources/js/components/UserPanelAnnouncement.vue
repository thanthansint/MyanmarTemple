<template>
  <div class="container" >
        <div id="toAnnouncement" class="row">
            <span class="green-text text-darken-4 prev">Upcoming Avtivities</span>
            <a href="#toEvent"><i class="small material-icons upward">arrow_upward</i></a>
        </div>
        <div class="card announcement-frame" v-if="!announcements.length">
            <p class="heading center-align">No Announcement !!!</p>
        </div>
        <div v-for="announcement in announcements" :key="announcement.id" class="card-panel announcement-frame">

            <div class="row center-align">
                <div class="col s8 m8 l8 xl8">
                    <p class="headingA">{{announcement.title}}</p>
                </div>
            </div>
            <div class="timeA">
                <span class="spaceA">Time:</span><span>{{announcement.announcement_time}}</span>
            </div>
            <div class="timeA">
                <span class="spaceA">Date:</span><span>{{announcement.announcement_date}}</span>
            </div>
            <div class="timeA">
                <span class="spaceA">Loation:</span><span>{{announcement.location}}</span>
            </div>
            <div class="contentA text-justification">
                <p>{{announcement.content}}</p>
            </div>


      <div class="divider"></div>
      <div class="row setting center-align">
        <div class="col s6 m6 l6 button-set">
          <button
            v-if="isInterested(announcement.id)"
            @click="interesting(announcement.id)"
            class="btn red-text text-darken-4 light-green lighten-5 butt-corner"
            type="submit"
          >
            <strong>
              Interesting
              <i class="large material-icons">favorite</i>
            </strong>
          </button>
          <button
            v-else-if="!isInterested(announcement.id)"
            @click="interesting(announcement.id)"
            class="btn blue-text text-darken-4 light-green lighten-5 butt-corner"
            type="submit"
          >
            <strong>
              Interesting
              <i class="large material-icons">favorite</i>
            </strong>
          </button>

          <span>{{interestedIncrease=checkInterestedCount(announcement.id)}}</span>
        </div>
        <div class="col s6 m6 l6 button-set">
          <button
            v-if="isGoing(announcement.id)"
            @click="gone(announcement.id)"
            class="btn pink-text text-darken-2 light-green lighten-5 butt-corner"
            type="submit"
          >
            <strong>
              Going
              <i class="large material-icons">favorite</i>
            </strong>
          </button>
          <button
            v-else-if="!isGoing(announcement.id)"
            @click="gone(announcement.id)"
            class="btn green-text text-darken-2 light-green lighten-5 butt-corner"
            type="submit"
          >
            <strong>
              Going
              <i class="large material-icons">favorite</i>
            </strong>
          </button>
          <span>{{goingIncrease=checkGoingCount(announcement.id)}}</span>
        </div>
      </div>

      <!-- <div>
                {{ announcements.links() }}
      </div>-->
    </div>
  </div>
</template>

<script>
export default {
  name: "UserPanelAnnouncement",

  data: function() {
    return {
      announcements: [],
      interests: [],
      joins: [],
      alreadyInterested: false,
      alreadyGoing: false,
      announcementid: 0,
      interestedcount: 0,
      goingcount: 0,
      interestedIncrease: 0,
      goingIncrease: 0,
      currentuserid: 0,
    }
  },
  methods: {

    displayAnnouncement: function() {
      axios.post("userRetrieveAnnouncement")
        .then(response => {
            console.log("OK");
          this.announcements = response.data.announcements;
          this.interests = response.data.interests;
          this.joins = response.data.joins;
          this.currentuserid = response.data.currentuserid;
          console.log(this.announcements);

        })
        .catch(error => {
            console.log("Not OK");
          console.log(error.response);
          window.location = "/home";
        });
    },
    isInterested: function(id) {
      for (var x = 0; x < this.interests.length; x++) {
        if (id == this.interests[x].announcement_id) {
          if (this.currentuserid == this.interests[x].user_id) {
            return true;
          }
        }
      }
      return false;
    },
    checkInterestedCount: function(id) {
      var count = 0;
      for (var x = 0; x < this.interests.length; x++) {
        if (id == this.interests[x].announcement_id) {
          count++;
        }
      }
      return count;
    },
    interesting: function(id) {
      console.log("announcement id :" + id);
      if (!this.isInterested(id)) {
        axios
          .post("/interestedCountPlus", {
            announcementid: id
          })
          .then(response => {
            this.interests.push({
              user_id: this.currentuserid,
              announcement_id: id
            });
            console.log(this.interests);
            this.interestedIncrease = response.data.count;
            this.alreadyInterested = true;
          })
          .catch(error => {
            console.log(error.response);
          });
      } else {
        axios
          .post("/interestedCountMinus", {
            announcementid: id
          })
          .then(response => {
            for (var x = 0; x < this.interests.length; x++) {
              if (id == this.interests[x].announcement_id) {
                if (this.currentuserid == this.interests[x].user_id) {
                  this.interests.splice(x, 1);
                  break;
                }
              }
            }
            console.log(this.interests);
            this.interestedIncrease -= 1;
            // this.interested = 0;
          })
          .catch(error => {
            console.log(error.response);
          });
      }
    },
    isGoing: function(id) {
      for (var x = 0; x < this.joins.length; x++) {
        if (id == this.joins[x].announcement_id) {
          if (this.currentuserid == this.joins[x].user_id) {
            return true;
          }
        }
      }
      return false;
    },
    checkGoingCount: function(id) {
      var count = 0;
      for (var x = 0; x < this.joins.length; x++) {
        if (id == this.joins[x].announcement_id) {
          count++;
        }
      }
      return count;
    },
    gone: function(id) {
      console.log("announcement id :" + id);
      if (!this.isGoing(id)) {
        axios
          .post("/goingCountPlus", {
            announcementid: id
          })
          .then(response => {
            this.joins.push({
              user_id: this.currentuserid,
              announcement_id: id
            });
            console.log(this.joins);
            this.goingIncrease = response.data.count;
            this.alreadyGoing = true;
          })
          .catch(error => {
            console.log(error.response);
          });
      } else {
        axios
          .post("/goingCountMinus", {
            announcementid: id
          })
          .then(response => {
            for (var x = 0; x < this.joins.length; x++) {
              if (id == this.joins[x].announcement_id) {
                if (this.currentuserid == this.joins[x].user_id) {
                  this.joins.splice(x, 1);
                  break;
                }
              }
            }
            console.log(this.joins);
            this.goingIncrease -= 1;
          })
          .catch(error => {
            console.log(error.response);
          });
      }
     }
    },
    mounted() {
      this.displayAnnouncement();
    }
};
</script>
<style lang="scss">
@mixin position-setting($pos, $top, $left) {
  position: $pos;
  top: $top;
  left: $left;
}
html {
  scroll-behavior: smooth;
}
#frame-size {
  width: 90vw;
  height: auto;
  @include position-setting(relative, 110vh, 1vw);
}
.announcement-frame {
  border: 2px solid blue;
  border-radius: 8px;
  background-color: #daf5e2;
}
.headingA {
  font-size: 25px;
  padding: 25px;
  padding-left: 30px;
  font-weight: 800;
  letter-spacing: 0.1rem;
  text-decoration: none;
  text-transform: uppercase;
}
.button-setting {
  margin-top: 30px;
  font-size: 25px;
}
.button-corner {
  border: 1px solid red;
  border-radius: 8px;
}
.timeA {
  color: blue;
  font-size: 20px;
  padding: 10px 25px;
}
.spaceA {
  padding: 0 25px;
}
.text-justification {
    text-align: justify;
    text-justify: inter-word;
}
.contentA {
  font-size: 20px;
  padding-top: 30px;
  padding-bottom: 30px;
}
.setting {
  padding-top: 20px;
}
.prev {
  font-size: 30px;
  font-weight: 1000;
  text-decoration: none;
  text-transform: uppercase;
}
.upward {
  font-size: 20px;
  padding: 35px 0;
  margin-left: 34vw;
}
@media screen and (max-width: 600px) {
.button-set {
    margin-bottom: 20px;
}
.headingA{
    font-size: 20px;
}
.prev {
    margin-top: 25px;
    font-size: 20px;
}
.timeA{
    color: blue;
    font-size: 18px;
    padding: 10px 10px;
}
.spaceA{
    padding: 0 10px;
}
.contentA{
    font-size: 18px;
    padding-top: 30px;
    padding-bottom: 30px;
}
}
@media screen and (min-width: 601px) and (max-width: 992px) {
.button-set {
    margin-bottom: 20px;
}
.headingA{
    font-size: 23px;
}
.prev {
    margin-top: 23px;
    font-size: 20px;
}
.timeA{
    color: blue;
    font-size: 20px;
    padding: 10px 25px;
}
.spaceA{
    padding: 0 25px;
}
.contentA{
    font-size: 20px;
    padding-top: 30px;
    padding-bottom: 30px;
}
}
@media screen and (min-width: 993px) and (max-width: 1199px) {
}
</style>
