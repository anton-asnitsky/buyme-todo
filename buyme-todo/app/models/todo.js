import DS from 'ember-data';

export default DS.Model.extend({
  body: DS.attr('string'),
  done: DS.attr('boolean', { defaultValue: false }),
  created_at: DS.attr('date'),
  updated_at:  DS.attr('date')
});
