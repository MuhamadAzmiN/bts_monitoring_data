import React, { useState } from 'react'
import { Dialog, DialogContent, DialogHeader, DialogTitle, DialogDescription, DialogFooter, DialogClose } from 'components/ui/dialog'
import { Button } from 'components/ui/button'
import { Input } from 'components/ui/input'
import { Label } from 'components/ui/label'
import { Textarea } from 'components/ui/textarea'

const dummyBtsData = [
  { id: 1, name: 'BTS Jakarta 1', freq: '900 MHz', param: 'Power: 20W, Antenna: Omni', status: 'Aktif', phone: '+621234567890' },
  { id: 2, name: 'BTS Bandung 2', freq: '1800 MHz', param: 'Power: 15W, Antenna: Directional', status: 'Nonaktif', phone: '+622345678901' },
  { id: 3, name: 'BTS Surabaya 3', freq: '2100 MHz', param: 'Power: 25W, Antenna: Omni', status: 'Aktif', phone: '+623456789012' },
]

export default function EditBtsPage() {
  const [btsList, setBtsList] = useState(dummyBtsData)
  const [selectedBts, setSelectedBts] = useState(null)
  const [dialogType, setDialogType] = useState(null) // 'edit', 'sms', 'broadcast', 'call'

  // Form states
  const [editName, setEditName] = useState('')
  const [editFreq, setEditFreq] = useState('')
  const [smsMessage, setSmsMessage] = useState('')
  const [broadcastMessage, setBroadcastMessage] = useState('')
  const [callNumber, setCallNumber] = useState('')

  const openDialog = (type, bts) => {
    setDialogType(type)
    setSelectedBts(bts)
    if (type === 'edit') {
      setEditName(bts.name)
      setEditFreq(bts.freq)
    } else if (type === 'call') {
      setCallNumber(bts.phone)
    }
    if (type === 'sms') {
      setSmsMessage('')
    }
    if (type === 'broadcast') {
      setBroadcastMessage('')
    }
  }

  const closeDialog = () => {
    setDialogType(null)
    setSelectedBts(null)
  }

  const saveEdit = () => {
    setBtsList((prev) =>
      prev.map((bts) =>
        bts.id === selectedBts.id ? { ...bts, name: editName, freq: editFreq } : bts
      )
    )
    closeDialog()
  }

  const sendSms = () => {
    alert(`SMS sent to ${selectedBts.name}: ${smsMessage}`)
    closeDialog()
  }

  const sendBroadcast = () => {
    alert(`Broadcast sent: ${broadcastMessage}`)
    closeDialog()
  }

  const makeCall = () => {
    alert(`Calling ${callNumber}...`)
    closeDialog()
  }

  return (
    <div className="max-w-6xl mx-auto p-6 bg-white rounded shadow">
      <h1 className="text-2xl font-bold mb-6">Edit BTS</h1>
      <table className="min-w-full border border-gray-300">
        <thead className="bg-gray-200">
          <tr>
            <th className="border px-4 py-2 text-left">Nama BTS</th>
            <th className="border px-4 py-2 text-left">Frekuensi</th>
            <th className="border px-4 py-2 text-left">Parameter Lain</th>
            <th className="border px-4 py-2 text-left">Status</th>
            <th className="border px-4 py-2 text-left">Aksi</th>
          </tr>
        </thead>
        <tbody>
          {btsList.map((bts) => (
            <tr key={bts.id} className="border-b">
              <td className="border px-4 py-2">{bts.name}</td>
              <td className="border px-4 py-2">{bts.freq}</td>
              <td className="border px-4 py-2">{bts.param}</td>
              <td className={`border px-4 py-2 font-semibold ${bts.status === 'Aktif' ? 'text-green-600' : 'text-red-600'}`}>
                {bts.status}
              </td>
              <td className="border px-4 py-2 flex flex-wrap gap-2">
                <Button variant="warning" onClick={() => openDialog('edit', bts)}>Edit</Button>
                <Button variant="secondary" onClick={() => openDialog('sms', bts)}>SMS</Button>
                <Button variant="secondary" onClick={() => openDialog('broadcast', bts)}>Broadcast</Button>
                <Button variant="secondary" onClick={() => openDialog('call', bts)}>Call</Button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>

      {/* Edit Dialog */}
      <Dialog open={dialogType === 'edit'} onOpenChange={(open) => !open && closeDialog()}>
        <DialogContent className="sm:max-w-lg bg-gray-100">
          <DialogHeader>
            <DialogTitle>Edit BTS</DialogTitle>
            <DialogDescription>
              Ubah nama BTS dan frekuensi di sini.
            </DialogDescription>
          </DialogHeader>
          <form onSubmit={(e) => { e.preventDefault(); saveEdit() }}>
            <div className="grid gap-4 py-4">
              <div className="grid gap-1">
                <Label htmlFor="bts-name">Nama BTS</Label>
                <Input id="bts-name" value={editName} onChange={(e) => setEditName(e.target.value)} required />
              </div>
              <div className="grid gap-1">
                <Label htmlFor="bts-freq">Frekuensi</Label>
                <Input id="bts-freq" value={editFreq} onChange={(e) => setEditFreq(e.target.value)} required />
              </div>
            </div>
            <DialogFooter>
              <DialogClose asChild>
                <Button variant="outline">Batal</Button>
              </DialogClose>
              <Button type="submit">Simpan</Button>
            </DialogFooter>
          </form>
        </DialogContent>
      </Dialog>

      {/* SMS Dialog */}
      <Dialog open={dialogType === 'sms'} onOpenChange={(open) => !open && closeDialog()}>
        <DialogContent className="sm:max-w-lg bg-gray-100">
          <DialogHeader>
            <DialogTitle>Send SMS</DialogTitle>
            <DialogDescription>
              Ketik pesan SMS di bawah ini.
            </DialogDescription>
          </DialogHeader>
          <form onSubmit={(e) => { e.preventDefault(); sendSms() }}>
            <Textarea
              placeholder="Tulis pesan SMS di sini..."
              value={smsMessage}
              onChange={(e) => setSmsMessage(e.target.value)}
              rows={5}
              required
            />
            <DialogFooter>
              <DialogClose asChild>
                <Button variant="outline">Batal</Button>
              </DialogClose>
              <Button type="submit">Kirim SMS</Button>
            </DialogFooter>
          </form>
        </DialogContent>
      </Dialog>

      {/* Broadcast Dialog */}
      <Dialog open={dialogType === 'broadcast'} onOpenChange={(open) => !open && closeDialog()}>
        <DialogContent className="sm:max-w-lg bg-gray-100">
          <DialogHeader>
            <DialogTitle>Broadcast Message</DialogTitle>
            <DialogDescription>
              Ketik pesan broadcast di bawah ini.
            </DialogDescription>
          </DialogHeader>
          <form onSubmit={(e) => { e.preventDefault(); sendBroadcast() }}>
            <Textarea
              placeholder="Tulis pesan broadcast di sini..."
              value={broadcastMessage}
              onChange={(e) => setBroadcastMessage(e.target.value)}
              rows={5}
              required
            />
            <DialogFooter>
              <DialogClose asChild>
                <Button variant="outline">Batal</Button>
              </DialogClose>
              <Button type="submit">Kirim Broadcast</Button>
            </DialogFooter>
          </form>
        </DialogContent>
      </Dialog>

      {/* Call Dialog */}
      <Dialog open={dialogType === 'call'} onOpenChange={(open) => !open && closeDialog()}>
        <DialogContent className="sm:max-w-lg bg-gray-100">
          <DialogHeader>
            <DialogTitle>Hubungi</DialogTitle>
            <DialogDescription>
              Masukkan nomor tujuan untuk melakukan panggilan.
            </DialogDescription>
          </DialogHeader>
          <form onSubmit={(e) => { e.preventDefault(); makeCall() }}>
            <Input
              type="tel"
              value={callNumber}
              onChange={(e) => setCallNumber(e.target.value)}
              required
            />
            <DialogFooter>
              <DialogClose asChild>
                <Button variant="outline">Batal</Button>
              </DialogClose>
              <Button type="submit">Hubungi</Button>
            </DialogFooter>
          </form>
        </DialogContent>
      </Dialog>
    </div>
  )
}
