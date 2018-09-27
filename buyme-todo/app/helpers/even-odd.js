import { helper } from '@ember/component/helper';

export function evenOdd(index) {
  return index % 2 === 0 ? "even" : "odd";
}

export default helper(evenOdd);
