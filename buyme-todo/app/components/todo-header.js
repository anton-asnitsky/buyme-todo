import Component from '@ember/component';
import Ember from 'ember';

export default Component.extend({
  actions:{
    onAddTodo: function(){
      const store = this.get('store');
      let todo = store.createRecord('todo', {
        body: 'משימה חדשה',
        done: false,
        created_at: Date.now(),
        updated_at:   Date.now()
      });
    }
  }
});
